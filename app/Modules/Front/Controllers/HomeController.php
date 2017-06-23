<?php

namespace App\Modules\Front\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\HomeRepository;

class HomeController extends Controller
{
    //

    protected $home;

    public function __construct(HomeRepository $home)
    {
        $this->home = $home;
    }

    public function index()
    {
        $inst = $this->home->first();
        return view('Front::pages.home', compact('inst'));
    }
}
