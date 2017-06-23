<?php
namespace App\Repositories;

use App\Repositories\Contract\RestfulInterface;
use App\Repositories\Eloquent\BaseRepository;
use App\Models\Client;

class ClientRepository extends BaseRepository implements RestfulInterface{

    public function getModel()
    {
        return Client::class;
    }
  // END

      // FRONT
      public function getOrderByStatus($column = ['*'], $field = 'id', $order='ASC')
      {
          return $this->model->OrderBy($field, $order)->where('status', 1)->get($column);
      }
}
