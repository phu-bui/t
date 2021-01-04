<?php


namespace App\Repositories\Property;


interface PropertyInterface
{
    function create(array $data);

    function update($id, array $data);
}
