<?php


namespace Modules\Admin\Http\Controllers;


use App\Services\ProductService;

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
}
