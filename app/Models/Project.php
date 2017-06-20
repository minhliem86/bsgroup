<?php

namespace App\Models;
use ShiftOneLabs\LaravelCascadeDeletes\CascadesDeletes;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use CascadesDeletes;

    protected $cascadeDeletes = ['videos'];

    public $table = 'projects';

    protected $fillable = ['title', 'description', 'status', 'order'];

    public function videos()
    {
        return $this->morphMany('App\Models\Video', 'videoable');
    }
}
