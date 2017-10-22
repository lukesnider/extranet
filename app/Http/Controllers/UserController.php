<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = \App\User::all();
      
       return view('admin.users.index',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$roles = Role::all();
		
        return view('admin.users.create',['roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$user = new User;
		
		$user->name = $request->input('name');
		$user->email = $request->input('email');
		$user->isActive = $request->input('active');
		
		$user->password = Hash::make($request->input('password'));
		
		$user->save(); 
		
		
		foreach($request->input('roles') AS $role)
		{
			$user->roles()->attach($role);
		}
				
		$users = User::all();
				
		return view('admin.users.index',['users' => $users]);
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
		$user = User::find($id);
		$user_roles = [];

		foreach ($user->roles as $role) {
			array_push($user_roles, $role->id);
		}
		//dd($user_roles);
		
		$roles = Role::all();
		
		return view('admin.users.edit',['user' => $user, 'roles' => $roles, 'user_roles' => $user_roles]);
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
		
		$user = User::find($id);
		
		$user->email = $request->input('email');
		$user->name	 = $request->input('name');
		
		$user->isActive = $request->input('active');
		
		$user->roles()->detach();
		
		foreach($request->input('roles') AS $role)
		{
			$user->roles()->attach($role);
		}
		
		$user->save();
		
		return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
