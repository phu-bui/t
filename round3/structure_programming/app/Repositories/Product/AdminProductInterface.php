<?php


namespace App\Repositories\Product;


interface AdminProductInterface
{
    function getAll();

    function create(array $data);

    function update($id, array $data);

    function getProductById($id);

    function deleteProduct($id);
}
