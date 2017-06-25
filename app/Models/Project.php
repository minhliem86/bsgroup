<?php

namespace App\Models;
use ShiftOneLabs\LaravelCascadeDeletes\CascadesDeletes;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Project extends Model
{
    use CascadesDeletes;
    use Translatable;

    public $translatedAttributes = ['title', 'description'];

    protected $cascadeDeletes = ['videos'];

    public $table = 'projects';

    protected $fillable = ['title', 'description', 'status', 'order'];

    public function videos()
    {
        return $this->morphMany('App\Models\Video', 'videoable');
    }
}
