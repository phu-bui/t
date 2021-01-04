<?php

namespace Modules\Product\Http\Controllers;
use Modules\Product\Services\ProductService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
session_start();
use DB;
use Modules\User\Http\Controllers\AdminBaseController;
use Session;

class AdminProductController extends AdminBaseController
{

    protected $productService;

    public function __construct(ProductService $productService) {
        parent::__construct();

        $this->productService = $productService;
    }

    public function index() {
        $products = $this->productService->getListProducts();
        return view('admin.products.index')->with('products', $products);
    }

    public function add_product(Request $request) {
        $brand = $this->productService->getBrands();
        return view('admin.products.add_product')->with('brand_product', $brand);
    }

    public function save_product(Request $request) {
        $this->productService->createProduct($request->all());
        Session::put('message', 'Add product successful!');
        return redirect()->route('admin.add_product');
    }

    public function edit_product(Request $request, $id) {
        $edit_product = DB::table('products')->where('id', $id)->get();
        $brand_product = DB::table('brands')->orderby('brand_id', 'desc')->get();

        return view('admin.products.edit_product')->with('products', $edit_product)->with('brand_product', $brand_product);
    }

    public function eit_product($product_id){
        $brand_product = DB::table('brands')->orderby('brand_id', 'desc')->get();
        $edit_product = DB::table('products')->where('id', $product_id)->get();
        return view('admin.products.edit_product')->with('products', $edit_product)->with('brand_product', $brand_product);
    }

    public function update_product(Request $request, $product_id) {
        $this->productService->updateProduct($request->all(), $product_id);
        Session::put('message', 'Update product successful!');
        return redirect()->route('admin.edit_product', array('product_id'=>$product_id));
    }

    public function delete_product($product_id) {
        if(empty($product_id)) return back();
        $this->productService->deleteMultiProduct($product_id);
        Session::put('message', 'Delete product successful!');
        return redirect()->route('admin.products.list');
    }
}
