<?php


namespace Modules\Product\Repository;

use App\Entities\Product;
use App\Repositories\BaseRepository;

class ProductRepository extends BaseRepository implements AdminProductInterface, WebProductInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Product::class;
    }

    public function getAll()
    {
        return $this->_model->with(['quantity'])->get();
    }

    public function getAllWithPaginate()
    {
    }

    public function getProductById($id)
    {
        return $this->_model->find($id);
    }

    function getListProductsWithKeyword($keyword, $categoryId = null)
    {

    }

    function deleteProduct($id)
    {
        $product = $this->find($id);
        $product->delete();
    }
}

