<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Submission;
use App\User;
use Illuminate\Http\Request;
class PagesController extends Controller {

	/**
	 * Display the Admisnistrative page.
	 *
	 * @return Response
	 */
	public function administrative()
	{
		$data=Submission::categoryViceSubmission('Administrative');
		return view('pages.user.adminstrative')->with('data',$data);

	}

	public function  payments(){
		$data=Submission::categoryViceSubmission('Payments');
		return view('pages.user.payments')->with('data',$data);
	}

	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
