<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use developeruz\Analytics\Period;
use developeruz\Analytics\Analytics;
use Carbon\Carbon;

class DashboardController extends Controller
{
    protected $analytic;

    public function __construct(Analytics $analytic)
    {
        $this->analytic = $analytic;
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
        // foreach($ga as $v){
        //     dd(Carbon::createFromFormat('Y-m-d H:i:s', $v['date'])->toDateString() );
        // }
        return view('Admin::pages.index', compact('ga'));
    }
}
