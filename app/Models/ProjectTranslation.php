<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTranslation extends Model
{
    public $table = 'project_translations';

    protected $fillable = ['title', 'description'];
}
