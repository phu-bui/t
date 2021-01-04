<?php


namespace Modules\Product\Services;

use Illuminate\Support\Facades\DB;
use Modules\Product\Repository\WebProductInterface;
use Modules\Product\Repository\BrandInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebProductService
{
    protected $productInterface;
    protected $brandInterface;

    public function __construct(
        WebProductInterface $productInterface,
        BrandInterface $brandInterface
    ) {
        $this->productInterface = $productInterface;
        $this->brandInterface = $brandInterface;

    }

    public function getListProducts() {
        return $this->productInterface->getAllWithPaginate();
    }

    public function getBrands() {
        return $this->brandInterface->getAll();
    }

    public function getProductDetail($id) {
        return $this->productInterface->getProductById($id);
    }


    public function getListProductByKeyword($brandId, $keyword) {
        $products = null;
        if(empty($brandId)) {
            $products =  $this->productInterface->getListProductsWithKeyword($keyword);
        } else {
            $products = $this->productInterface->getListProductsWithKeyword($keyword, $brandId);
        }
        return $products;
    }

}
