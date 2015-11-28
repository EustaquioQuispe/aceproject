<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\UserForm;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("users.index")->with('users', \App\User::paginate(5)->setPath('user'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view("users.createUpdate");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$user = new \App\User;
	 
		$user->name = \Request::input('name');
	 
		$user->lastname = \Request::input('lastname');

		$user->email = \Request::input('email');

		$user->username = \Request::input('username');

		$user->password = \Request::input('password');

		$user->type = \Request::input('type');

		$user->state = \Request::input('state');
	 
		$user->save();
	 
		return redirect('user/create')->with('message', 'User saved');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('users.createUpdate')->with('user', \App\User::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$user = \App\User::find($id);

		$user->name = \Request::input('name');
	 
		$user->lastname = \Request::input('lastname');

		$user->email = \Request::input('email');

		$user->username = \Request::input('username');

		$user->password = \Request::input('password');

		$user->type = \Request::input('type');

		$user->state = \Request::input('state');
	 
		$user->save();
	 
		return redirect()->route('user.edit', ['user' => $id])->with('message', 'User updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = \App\User::find($id);
 
		$post->delete();
	 
		return redirect()->route('user.index')->with('message', 'User deleted');
	}

}
