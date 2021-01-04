<?php


namespace Modules\Product\Services;


use Illuminate\Support\Facades\DB;
use Modules\Product\Repository\AdminProductInterface;
use Modules\Product\Repository\BrandInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductService
{
    protected $productInterface;
    protected $brandInterface;
    public function __construct(
        AdminProductInterface $productInterface,
        BrandInterface $brandInterface) {
        $this->productInterface = $productInterface;
        $this->brandInterface = $brandInterface;
    }

    public function getListProducts() {
        return $this->productInterface->getAll();
    }

    public function getBrands() {
        return $this->brandInterface->getAll();
    }

    public function createProduct(array $data) {
        DB::beginTransaction();
        $productInfo = [
            'product_sku' => $data['product_sku'],
            'brand_id' => $data['brand_id'],
            'slug' => $data['slug'],
            'name' => $data['name'],
            'image' => $data['image'],
            'price' => $data['price'],
            'cost_price' => $data['cost_price'],
            'short_description' => $data['short_description'],
            'long_description' => $data['long_description'],
            'quantity' => $data['vote'],
            'status' => $data['status'],
        ];
        $result = $this->productInterface->create($productInfo);
        if(!empty($result)) {
            DB::commit();
        } else {
            DB::rollBack();
        }
    }

    public function getProductDetail($id) {
        return $this->productInterface->getProductById($id);
    }

    public function updateProduct(array $data, $id) {
        DB::beginTransaction();
        $productInfo = [
            'product_sku' => $data['product_sku'],
            'brand_id' => $data['brand_id'],
            'slug' => $data['slug'],
            'name' => $data['name'],
            'image' => $data['image'],
            'price' => $data['price'],
            'cost_price' => $data['cost_price'],
            'short_description' => $data['short_description'],
            'long_description' => $data['long_description'],
            'quantity' => $data['vote'],
            'status' => $data['status'],
        ];
        $result = $this->productInterface->update($id, $productInfo);
        if(!empty($result)) {
            DB::commit();
        } else {
            DB::rollBack();
        }
    }

    public function getListProductByKeyword($categoryId, $keyword) {
        $products = null;
        if(empty($categoryId)) {
            $products =  $this->productInterface->getListProductsWithKeyword($keyword);
        } else {
            $products = $this->productInterface->getListProductsWithKeyword($keyword, $categoryId);
        }
        return $products;
    }
    public function deleteMultiProduct($id) {
            $this->productInterface->deleteProduct($id);
    }


}
