<?php
namespace App\Repositories;

use App\Repositories\Contract\RestfulInterface;
use App\Repositories\Eloquent\BaseRepository;
use App\Models\Home;

class HomeRepository extends BaseRepository implements RestfulInterface{

    public function getModel()
    {
        return Home::class;
    }

    public function first($column = ['*'])
    {
        $inst = $this->model->firstOrFail();
        if($inst)
        {
            return $inst;
        }else{
            return false;
        }
    }
  // END
}
