<?php

namespace Modules\Product\Http\Controllers;
use Modules\Product\Services\WebProductService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
session_start();
use DB;
use Modules\User\Http\Controllers\AdminBaseController;
use Session;

class ProductController extends AdminBaseController
{

    protected $productService;

    public function __construct(WebProductService $productService) {
        parent::__construct();

        $this->productService = $productService;
    }

    public function search(Request $req) {
        $brand_product = DB::table('brands')->orderby('brand_id', 'desc')->get();
        $keywords = $req->keywords_submit;
        $search_product = DB::table('products')->where('name', 'like', '%'.$keywords.'%')->get();
        return view('products.search',compact('search_product'))->with('brand_product', $brand_product);
    }

}
