<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use ShiftOneLabs\LaravelCascadeDeletes\CascadesDeletes;

class Home extends Model
{
    use CascadesDeletes;
    protected $cascadeDeletes =['videos'];

    public $table = 'homes';

    protected $fillable =['title'];

    public function videos()
    {
        return $this->morphMany('App\Models\Video', 'videoable');
    }
}
