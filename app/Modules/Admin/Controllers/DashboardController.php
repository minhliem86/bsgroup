<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use developeruz\Analytics\Period;
use developeruz\Analytics\Analytics;
use Carbon\Carbon;
use App\Repositories\ProjectRepository;
use App\Repositories\ClientRepository;

class DashboardController extends Controller
{
    protected $analytic;
    protected $project;
    protected $client;

    public function __construct(Analytics $analytic, ProjectRepository $project, ClientRepository $client)
    {
        $this->analytic = $analytic;
        $this->project = $project;
        $this->client = $client;
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            if($request->has('week')){
                 $ga = $this->analytic->fetchTotalVisitorsAndPageViews(Period::days(7));
            }else{
                $from = $request->input('from');
                $to = $request->input('to');

                $start_d = Carbon::createFromFormat('d-m-Y', $from);
                $to_d = Carbon::createFromFormat('d-m-Y', $to);
                $date = Period::create($start_d, $to_d);
                $ga = $this->analytic->fetchTotalVisitorsAndPageViews($date);
            }

            return view('Admin::ajax.ajaxChart', compact('ga'))->render();
        }else{
            $ga = $this->analytic->fetchTotalVisitorsAndPageViews(Period::days(7));
        }
        $number_project =$this->project->count();
        $number_client =$this->client->count();
        return view('Admin::pages.index', compact('ga', 'number_project', 'number_client'));
    }
}
