<?php


namespace Modules\Product\Repository;


interface WebProductInterface
{
    function getAllWithPaginate();

    function getProductById($id);

    function getListProductsWithKeyword($keyword, $categoryId = null);
}
