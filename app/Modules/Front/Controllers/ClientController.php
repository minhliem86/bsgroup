<?php

namespace App\Modules\Front\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\ClientRepository;
use Session;

class ClientController extends Controller
{
    protected $client;

    public function __construct(ClientRepository $client)
    {
        $this->client = $client;
    }

    public function index($slug = null)
    {
        switch ($slug) {
			case 'service':
				Session::flash('area','service');
				break;
			case 'client':
				Session::flash('area','client');
				break;
			default:
				break;
		}
        $inst = $this->client->getOrderByStatus();
        return view('Front::pages.agency', compact('inst'));
    }
}
