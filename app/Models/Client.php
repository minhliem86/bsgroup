<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $table = 'clients';

    protected $fillable = ['img_url', 'order', 'status'];
}