<?php namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Submission;
use App\User;

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

	public function sis(){
		$data=Submission::categoryViceSubmission('SIS');
		return view('pages.user.sis')->with('data',$data);
	}

	public function academicDiv(){
		$data=Submission::categoryViceSubmission('Academic Division');
		return view('pages.user.academicDivision')->with('data',$data);
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

	public function Posts()
	{
		$data=Submission::viewAllSubmission();
		return view('pages.user.Posts')->with('data',$data);
	}

	public function comments()
	{
		$com=Comment::viewAllComent();
		return view('pages.user.Posts')->with('com',$com);
	}
	/**s
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

	//update the current post
	public function updatePost()
	{
		if(\Request::ajax()){
			$data = \Input::all();
			Submission::newPost($data);
			echo $data['currentPost'];
		}
	}






}
