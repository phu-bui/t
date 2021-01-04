<?php

namespace Modules\Web\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Modules\Web\Http\Requests\ShippingRequest;
use Modules\Web\Services\CartService;
use DB;
use phpDocumentor\Reflection\Types\Null_;
use Session;
class CheckoutController extends WebBaseController
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */

    public function checkout(){
        $category_product = DB::table('categories')->orderby('id', 'desc')->get();
        $product_cart = DB::table('carts')->join('products','carts.product_id', '=', 'products.id')->get();
        return view('web::checkout.show_checkout')
            ->with('category_product', $category_product)
            ->with('product_cart', $product_cart);
    }

    public function save_checkout_customer(Request $requests)
    {
        $user = Auth::guard('web')->user();
        $data_ship = array();
        $data_ship['user_id'] = $user->id;
        $data_ship['receiver_name'] = $requests->input('receiver_name');
        $data_ship['receiver_email'] = $requests->input('email');
        $data_ship['receiver_phone_number'] = $requests->input('receiver_phone_number');
        $data_ship['province'] = $requests->input('province');
        $data_ship['address'] = $requests->input('billing_address_1');

        $shipping_id = DB::table('shipping_infos')->insertGetId($data_ship);
        return redirect()->route('web.success', array('shipping_id'=>$shipping_id));
    }

    public function success($shipping_id){
        $shipping = DB::table('shipping_infos')->where('id', $shipping_id)->get();
        $cart = DB::table('carts')->orderby('id', 'desc')->get();

        if($cart->isEmpty()){
            Session::put('message', 'Giỏ hàng hiện đang trống, xin mời bạn thực hiện order');
            return view('web::checkout.cart_null');
        }

        $quantity_all = array();
        foreach ($cart as $item) {
            $warehouse_info = DB::table('warehouses')->where('product_id', $item->product_id)->get();
            foreach ($warehouse_info as $ware) {
                $quantity_remain = $ware->quantity - $item->quantity;
                if($quantity_remain<0){
                    Session::put('message', 'Số lượng sản phẩm trong kho không đủ để order');
                    return redirect()->route('web.checkout');
                }
                $quantity_all[] = $quantity_remain;

            }
        }
        foreach ($cart as $key => $item){
            DB::table('warehouses')->where('product_id', $item->product_id)->update(['quantity'=> $quantity_all[$key]]);
        }

        $user = Auth::guard('web')->user();

        $data_order = array();
        $data_order['order_no'] = rand(1,1000);
        $data_order['user_id'] = $user->id;
        $data_order['payment_type'] = 1;
        $data_order['order_status'] = 1;

        $order_id = DB::table('orders')->insertGetId($data_order);

        foreach ($cart as $item){
            $data_order_line = array();
            $data_order_line['order_id'] = $order_id;
            $data_order_line['product_id'] = $item->product_id;
            $data_order_line['quantity'] = $item->quantity;
            $price_product = DB::table('products')->where('id', $item->product_id)->get();
            foreach ($price_product as $pro) {
                $data_order_line['order_price'] = $pro->price * $item->quantity;
            }
            $data_order_line['promotion_id'] = 1;
            DB::table('order_lines')->insert($data_order_line);
        }

        $order = DB::table('orders')->where('id', $order_id)->get();
        $order_lines = DB::table('order_lines')->join('products','order_lines.product_id','=','products.id')->join('categories','products.category_id','=','categories.id')->where('order_lines.order_id', $order_id)->get();
        DB::table('carts')->delete();
        return view('web::checkout.success')->with('order', $order)
            ->with('order_lines', $order_lines)
            ->with('shipping', $shipping);
    }

    public function remove_order(){
        $user = Auth::guard('web')->user();
        $order_new = DB::table('orders')->where('user_id', $user->id)->orderby('id', 'desc')->limit(1)->get();
        foreach ($order_new as $value){
            $id_order_new = $value->id;
        }
        $order_lines_new = DB::table('order_lines')->where('order_id', $id_order_new)->get();
        foreach ($order_lines_new as $item) {
            $product_id = $item->product_id;
            $warehouse = DB::table('warehouses')->where('product_id', $product_id)->get();
            foreach ($warehouse as $ware){
                $quantity_current = $ware->quantity;
            }
            $quantity_new = $item->quantity + $quantity_current;
            DB::table('warehouses')->where('product_id', $product_id)->update(['quantity'=>$quantity_new]);

        }
        DB::table('order_lines')->where('order_id', $id_order_new)->delete();
        DB::table('orders')->where('id', $id_order_new)->delete();

    }

    public function order_history(){
        $order = DB::table('orders')->orderby('id', 'desc')->get();
        return view('web::checkout.order_history')->with('order', $order);
    }

    public function payment(){
        $user = Auth::guard('web')->user();
        echo $user->id;
    }
}

