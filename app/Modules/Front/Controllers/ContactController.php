<?php

namespace App\Modules\Front\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Event;
use Session;
use App\Events\SendEmailEvent;
use App\Repositories\ContactRepository;

class ContactController extends Controller
{
    protected $contact;

    public function __construct(ContactRepository $contact)
    {
        $this->contact = $contact;
    }

    public function index($param = null)
    {
        switch ($param) {
			case 'register':
				Session::flash('key','beginForm');
				break;
			default:
				break;
		}
        return view('Front::pages.contact');
    }

    public function postIndex(Request $request)
    {
        $data = [
            'service' => $request->input('service'),
			'timing' => $request->input('timing'),
			'budget' => $request->input('budget'),
			'name' => $request->input('name'),
			'email' => $request->input('email'),
			'phone' => $request->input('phone'),
        ];
        $data_insert = [
            'service' => json_encode($request->input('service')),
			'time' => json_encode($request->input('timing')),
			'budget' => json_encode($request->input('budget')),
			'name' => $request->input('name'),
			'email' => $request->input('email'),
			'phone' => $request->input('phone'),
        ];
        $this->contact->create($data_insert);

        event(new SendEmailEvent('Front::emails.customer-received', $data, $request->input('email'), 'BS GROUP', 'THANK YOU FOR SHARING YOUR INFORMATION!'));

        event(new SendEmailEvent('Front::emails.customer-register', $data, 'marketing@bsgroup.com.vn' , 'BS GROUP', 'CUSTOMER SERVICE'));

        Session::flash('status','success');

		return redirect()->back();
    }
}
