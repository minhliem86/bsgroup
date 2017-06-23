<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $table = "contacts";

    protected $fillable = ['service', 'time', 'budget', 'name', 'email', 'phone', 'check'];
}
