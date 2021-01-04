<?php


namespace Modules\Product\Repository;


interface AdminProductInterface
{
    function getAll();

    function create(array $data);

    function update($id, array $data);

    function getProductById($id);

    function deleteProduct($id);
}
