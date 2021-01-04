<?php


namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Services\ProductService;
use Illuminate\Http\Request;
use App\Http\Requests\AdminAddProductRequest;
use DB;
use mysql_xdevapi\Table;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();


class ProductController extends AdminBaseController
{
    protected $productService;

    public function __construct(ProductService $productService) {
        parent::__construct();

        $this->productService = $productService;
    }

    public function index() {
        $products = $this->productService->getListProduct();
        return view('admin::products.index', compact('products'));
    }

    public function add_product(){
        $brand_product = DB::table('brands')->orderby('id', 'desc')->get();

        return view('admin::add_product')->with('brand_product', $brand_product);
    }

    public function save_product(AddProductRequest $request){
        $data = array();
        $data['product_sku'] = $request->product_sku;
        $data['brand_id'] = $request->brand_id;
        $data['slug'] = $request->slug;
        $data['name'] = $request->name;
        $data['image'] = $request->image;
        $data['price'] = $request->price;
        $data['cost_price'] = $request->cost_price;
        $data['short_description'] = $request->short_description;
        $data['long_description'] = $request->long_description;
        $data['vote'] = $request->vote;
        $data['status'] = $request->status;

        DB::table('products')->insert($data);
        Session::put('message', 'Thêm sản phẩm thành công');
        return redirect()->route('admin.add_product');
    }

    public function edit_product($product_id){
        $brand_product = DB::table('brands')->orderby('id', 'desc')->get();
        $edit_product = DB::table('products')->where('id', $product_id)->get();
        return view('admin::edit_product')->with('product', $edit_product)->with('brand_product', $brand_product);
    }

    public function update_product(Request $request, $product_id){
        $data = array();
        $data['product_sku'] = $request->product_sku;
        $data['brand_id'] = $request->brand_id;
        $data['slug'] = $request->slug;
        $data['name'] = $request->name;
        $data['image'] = $request->image;
        $data['price'] = $request->price;
        $data['cost_price'] = $request->cost_price;
        $data['short_description'] = $request->short_description;
        $data['long_description'] = $request->long_description;
        $data['vote'] = $request->vote;
        $data['status'] = $request->status;

        DB::table('products')->where('id', $product_id)->update($data);
        Session::put('message', 'Cập nhật thông tin sản phẩm thành công');
        return redirect()->route('admin.edit_product', array('product_id'=>$product_id));
    }
    public function delete_product($product_id){
        DB::table('products')->where('id', $product_id)->delete();
        Session::put('message', 'Xoá sản phẩm thành công');
        return redirect()->route('admin.product.list');
    }

}
