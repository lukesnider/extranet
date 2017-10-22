<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\ClientEmailAddress;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('admin.clients.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$client_email = new ClientEmailAddress;
        $client = new Client;
		
		$client->name 	=	$request->input('name');
		$client->contact_email 	=	$request->input('email');
		$client->address_1 	=	$request->input('address_1');
		$client->address_2 	=	$request->input('address_2');
		$client->phone 	=	$request->input('phone');
		$client->fax 	=	$request->input('fax');
		$client->state 	=	$request->input('state');
		$client->zip 	=	$request->input('zip');
		$client->city 	=	$request->input('city');
		$client->isActive 	=	$request->input('active');

		//dd($client,$request);
		$client->save();
		
		$client_email->client_id = $client->id;
		$client_email->email = $client->contact_email;
		
		$client_email->save();
		
        $clients = Client::all();
        return redirect()->route('clients.index', ['clients' => $clients]);
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
		$client = Client::find($id);
		
        return view('admin.clients.edit', ['client' => $client]);
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
        $client = Client::find($id);
		$client->name 	=	$request->input('name');
		$client->contact_email 	=	$request->input('email');
		$client->address_1 	=	$request->input('address_1');
		$client->address_2 	=	$request->input('address_2');
		$client->phone 	=	$request->input('phone');
		$client->fax 	=	$request->input('fax');
		$client->state 	=	$request->input('state');
		$client->zip 	=	$request->input('zip');
		$client->city 	=	$request->input('city');
		$client->isActive 	=	$request->input('active');

		$client->save();
		
		return view('admin.clients.edit', ['client' => $client]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
