<?php namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Submission;
use App\User;
use Illuminate\Support\Facades\Input;
use willvincent\Rateable\Rateable;

class PagesController extends Controller
{

	/**
	 * Display the Admisnistrative page.
	 *
	 * @return Response
	 */

	//Add Ideas Route
	public function addIdea()
	{
		$ideas = Submission::orderBy('category')->get();
		return view('pages.user.addIdea')->with('ideas',$ideas);
	}


	public function store()
	{
		$Idea = new Submission();
		$Idea->post = Input::post('post');
		$Idea->category = Input::post('cat');
		$Idea->save();
		return $Idea;

	}

	public function administrative()
	{
		$data = Submission::categoryViceSubmission('Administrative');
		return view('pages.user.adminstrative')->with('data', $data);

	}

	public function  payments()
	{
		$data = Submission::categoryViceSubmission('Payments');
		return view('pages.user.payments')->with('data', $data);
	}

	public function sis()
	{
		$data = Submission::categoryViceSubmission('SIS');
		return view('pages.user.sis')->with('data', $data);
	}

	public function academicDiv()
	{
		$data = Submission::categoryViceSubmission('Academic Division');
		return view('pages.user.academicDivision')->with('data', $data);
	}

	public function CleanSer()
	{
		$data = Submission::categoryViceSubmission('Cleaning Service');
		return view('pages.user.cleaningServices')->with('data', $data);
	}

	public function image()
	{
		$idea = Submission::FindOrFail(1);
		return view('sampath');
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
