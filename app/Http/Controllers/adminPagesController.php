<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Submission;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use App\User;

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

	public function createUser()
	{




	}

	public function updateUsersDetails()
	{
		return view('pages.admin.updateUserDetails');
	}

	public function manageSubmissions(){
		$data=Submission::AllSubmissionWithDetails();
		return view('pages.admin.manageSubmissions')->with('data',$data);
	}

	public function loadRewards()
	{
		$data=Submission::AllSubmissionWithDetails();
		return view('pages.admin.RewardsForSubmission')->with('data',$data);
	}

	public function getLikesForCom(Request $request)
	{
		$pid = $request['postId'];

		$comments = DB::table('users')
			->join('comments', 'users.id', '=', 'comments.uid')
			->join('submissions', 'users.id', '=', 'submissions.user_id')
			->select('users.name','comments.uid' ,'comments.no_of_votes','comments.id','comments.comment' ,'submissions.post')
			//->where('comments.pid',$pid)
			//->paginate(10);
			->orderBy('no_of_votes', 'desc')
			->get();
		//return $comments;
		return view('pages.admin.RewardsForComment', compact('comments'));
	}

	public function GiveSubReward()
	{
		if(\Input::ajax())
		{
			$data=\Input::all();

			$reward=new Reward();

			$reward->uid=$data['user_id'];
			$reward->description=$data['post_desc'];

			$reward->save();

			echo '';
		}

	}


	public function GiveComReward()
	{
		if(\Input::ajax())
		{
			$data=\Input::all();

			$reward=new Reward();

			$reward->uid=$data['user_id'];
			$reward->description=$data['comment_desc'];

			$reward->save();

			echo '';
		}

	}

	public  function sortData (Request $request) {
		$d=$request->Make;
		if($d == "vote")
		{
			//$data=Submission::orderBy('no_of_votes','DESC')->get();

			$data=Submission::SortPostHighLikes();
		}


		return view('pages.admin.manageSubmissions')->with('data', $data);
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

	/**
	 * $id parameter delete fromdestroy
	 */
	public function destroy()
	{
		//
		$id=\Input::all();
		$data=Submission::find($id['pid']);

	}

}
