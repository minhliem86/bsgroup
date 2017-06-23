<?php namespace App\Modules\Front\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Session;
use Event;
use App\Events\SendEmailEvent;

class IndexController extends Controller {

	public function getIndex(){
		if(\Request::segment(1) == 'recent-project'){
			Session::flash('recent','project');
			return view('Front::pages.home');
		}else{
			Session::forget('recent');
			return view('Front::pages.home');
		}

  }

  public function getAgency($slug = null){
		switch ($slug) {
			case 'service':
				Session::flash('area','service');
				return view('Front::pages.agency');
				break;
			case 'client':
				Session::flash('area','client');
				return view('Front::pages.agency');
				break;

			default:
				return view('Front::pages.agency');
				break;
		}

  }

  public function getContact(Request $request, $param = null){
		switch ($param) {
			case 'register':
				Session::flash('key','beginForm');
				return view('Front::pages.contact');
				break;

			default:
				return view('Front::pages.contact');
				break;
		}
  }
	public function postContact(Request $request){
		$data = [
			'service' => $request->input('service'),
			'timing' => $request->input('timing'),
			'budget' => $request->input('budget'),
			'name' => $request->input('name'),
			'email' => $request->input('email'),
			'phone' => $request->input('phone'),
		];
		// Event::fire(new SendEmailEvent($data,'minhliemphp@gmail.com'));
		\Mail::send('Front::emails.customer-received',$data,function($mes) use($data){
			$mes->from('customer_service@bsgroup.com.vn');
			$mes->to($data['email']);
			$mes->subject('BS GROUP', 'THANK YOU FOR SHARING YOUR INFORMATION!');
		});

		\Mail::send('Front::emails.customer-register',$data,function($mes){
			$mes->from('customer_service@bsgroup.com.vn');
			$mes->to('marketing@bsgroup.com.vn')->cc([ 'nu.thao@bsgroup.com.vn', 'uyenthao2602@gmail.com', 'liemphan@bsgroup.com.vn']);
			$mes->subject('BS GROUP', 'CUSTOMER SERVICE');
		});
		Session::flash('status','success');
		return redirect()->back();
	}

	public function getProject()
	{
		return view('Front::pages.project');
	}

}
