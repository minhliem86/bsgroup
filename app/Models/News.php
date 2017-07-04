<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Dimsav\Translatable\Translatable;

class News extends Model
{
    use Translatable;

    public $translatedAttributes = ['title', 'description', 'content'];

    public $table = "news";

    protected $fillable =['order', 'status', 'img_url'];
}
