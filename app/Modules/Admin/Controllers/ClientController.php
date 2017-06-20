<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\ClientRepository;
use App\Repositories\Eloquent\CommonRepository;

class ClientController extends Controller
{
    protected $clientRepo;
    protected $common;

    public function __construct(ClientRepository $clientRepo, CommonRepository $common)
    {
        $this->clientRepo = $clientRepo;
        $this->common = $common;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inst = $this->clientRepo->all();
        return view('Admin::pages.client.index', compact('inst'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin::pages.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = $this->clientRepo->getOrder();
        $img_url = $this->common->getPath($request->input('img_url'));
        $data = [
            'img_url' => $img_url,
            'order' => $order,
        ];
        if(!$this->clientRepo->create($data)){
            return redirect()->back()->with('error','Item Created Fail')->withInput();
        }
        return redirect()->route('admin.client.index')->with('success','Item Created.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inst = $this->clientRepo->find($id);
        return view('Admin::pages.client.edit', compact('inst'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $status =  $request->has('status') ? 1 : 0 ;
        $img_bk = $this->clientRepo->find($id)->img_url;
        $img_url = $request->input('img_url') != $img_bk ? $this->common->getPath($request->input('img_url')) : $img_bk ;

        $data = [
            'img_url' => $img_url,
            'order' => $request->input('order'),
            'status' => $status,
        ];
        if(!$this->clientRepo->update($data, $id)){
            return redirect()->back()->with('error','Item Update Fail')->withInput();
        }
        return redirect()->route('admin.client.index')->with('success','Item Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->clientRepo->delete($id);
        return redirect()->route('admin.client.index')->with('success','Item Deleted.');
    }

    // DELETE ALL
    public function deleteAll(Request $request)
    {
        if(!$request->ajax())
        {
            abort(404, 'Not Access !');
        }else{
            $data = $request->input('arr');
            $this->clientRepo->deleteAll($data);
            return response()->json([
                'error'=> false,
                'mes' => 'All Items Deleted',
            ], 200);
        }
    }

    // UPDATE ORDER
    public function updateOrder(Request $request)
    {
        if(!$request->ajax()){
            abort(404, 'Not Access');
        }else{

        }
    }

    // UPDATE STATUS
    public function updateStatus(Request $request)
    {
        if(!$request->ajax()){
            abort(404, 'Not Access');
        }else{

        }
    }
}
