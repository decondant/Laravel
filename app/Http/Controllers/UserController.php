<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
	public function create()
    {
        return view('users.create');
    }
	
	public function store(Request $request)
	{
        $user = $this->validate(request(), [
          'name' => 'required',
          'email' => 'required',
		  'password' => 'required'
        ]);
        User::create($user);
        return back()->with('success', 'User has been registered!');
	}
	/*
	public function index()
    {
        $users = User::all()->toArray();
        return view('users.index', compact('users'));
    }
	
	public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit',compact('user','id'));
    }
	
	public function update(Request $request, $id)
    {
        $user = User::find($id);
        $this->validate(request(), [
          'name' => 'required',
          'email' => 'required',
		  'password' => 'required'
        ]);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
		$user->save();
        return redirect('users')->with('success','User successfully updated');
    }
	
	public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('users')->with('success','User has been  deleted');
    }*/
}