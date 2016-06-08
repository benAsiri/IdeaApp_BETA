<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;

class adminPagesController extends Controller {

	/**
	 * Show the form for adding new Users
	 *
	 * @return Response
	 */

	public function newUsers()
	{
		return view('pages.admin.addUsers');
	}

	public function updateUsersDetails()
	{
		return view('pages.admin.updateUserDetails');
	}

	public function manageSubmissions(){
		return view('pages.admin.manageSubmissions');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$user = User::getUsers();
//		$this->validate($request , [
//			"name" => "required"
//
//		]);
		/*
		$rules = [
			'name' => 'required',
			'email' => 'required',
			'password' => 'required'
		];

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()) {
			return back()->withErrors($validator)->withErrors($validator)->withInput();
		}
*/
		$user = new User();

		$user->name = $request->name;
		$user->email= $request->email;
		$user->password = bcrypt($request->password);
		$user->user_type = $request->cat;

		$user->save();

		return back();
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
