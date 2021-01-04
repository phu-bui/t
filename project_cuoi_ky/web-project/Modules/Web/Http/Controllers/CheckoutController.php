<?php

namespace Modules\Web\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Modules\Web\Services\CartService;
use DB;
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
        $data_ship['receiver_name'] = $requests->receiver_name;
        $data_ship['receiver_email'] = $requests->email;
        $data_ship['receiver_phone_number'] = $requests->receiver_phone_number;
        $data_ship['province'] = $requests->province;
        $data_ship['address'] = $requests->billing_address_1;

        $shipping_id = DB::table('shipping_infos')->insertGetId($data_ship);
        $shipping = DB::table('shipping_infos')->where('id', $shipping_id)->get();


        $cart = DB::table('carts')->orderby('id', 'desc')->get();


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

        $data_order = array();
        $data_order['order_no'] = 1;
        $data_order['user_id'] = 1;
        $data_order['note'] = $requests->order_comments;
        $data_order['payment_type'] = $requests->payment_id;
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
        return view('web::checkout.success')->with('order', $order)
            ->with('order_lines', $order_lines)
            ->with('shipping', $shipping);
    }

    public function payment(){
        $user = Auth::guard('web')->user();
        echo $user->id;
    }
}

