<?php

namespace App\Modules\Front\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\ProjectRepository;

class ProjectController extends Controller
{
    protected $project;

    public function __construct(ProjectRepository $project)
    {
        $this->project = $project;
    }

    public function index()
    {
        $inst = $this->project->getOrderByStatus(['id', 'title', 'order', 'status']);
        return view('Front::pages.project', compact('inst'));
    }
}
