<?php


namespace App\Repositories\Category;


use App\Entities\Category;
use App\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Category::class;
    }
}
