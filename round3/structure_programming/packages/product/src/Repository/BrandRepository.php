<?php


namespace Modules\Product\Repository;
use App\Entities\Brand;
use App\Repositories\BaseRepository;

class BrandRepository extends BaseRepository implements BrandInterface
{
    public function getModel()
    {
        return Brand::class;
    }

    public function getAll()
    {
        return $this->_model->get();
    }
}
