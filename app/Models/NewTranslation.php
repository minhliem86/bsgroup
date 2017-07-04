<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewTranslation extends Model
{
    public $table = 'news_translation';

    protected $fillable = ['title', 'content', 'description', 'locale'];
}
