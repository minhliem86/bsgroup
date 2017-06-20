<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public $table = 'videos';

    protected $fillable = ['videoable_id', 'videoable_type', 'order', 'status'];

    public function videoable()
    {
        return $this->morphTo();
    }
}
