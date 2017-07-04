<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecruitTranslation extends Model
{
    public $table = 'news_translation';

    protected $fillable = ['title', 'content', 'description', 'locale'];
}
