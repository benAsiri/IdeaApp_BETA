<?php namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Submission;
use App\User;
use App\Like;
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


	public function CleanSer(){
		$data=Submission::categoryViceSubmission('Academic Division');
		return view('pages.user.cleaningServices')->with('data',$data);
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

    // Add Like for the post
    public function postAddLike(Request $request)
    {
        $submission = Submission::find($request['postId']);
        $submission->no_of_votes = $submission->no_of_votes + 1;
        $submission->update();
        return response()->json(['new_likes' => $submission->no_of_votes], 200);
    }

    // Add Comment for the post
    public function postAddComment(Request $request)
    {
        date_default_timezone_set("Asia/Colombo");
        $comment = new Comment();
        $comment->comment = $request['body'];
        $comment->date = date('Y-m-d H:i:s');
        $comment->no_of_votes = 1;

        $submission = Submission::find($request['postId']);
        $user = $request->user();

        $comment->uid = $user->id;
        $comment->pid = $submission->id;

        $comment->save();

        return response()->json(['message' => "Comment Added"], 200);
    }

    public function getCommentsForPost(Request $request)
    {
        $pid = $request['postId'];
//      $comments = DB::table('comments')->where('pid',$pid)->get();

        $comments = DB::table('users')
            ->join('comments', 'users.id', '=', 'comments.uid')
            ->select('users.name', 'comments.comment', 'comments.date')
            ->where('comments.pid',$pid)
            ->get();

        return response()->json(['comments' => $comments], 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function Posts()
    {
        $data = Submission::viewAllSubmission();
        return view('pages.user.Posts')->with('data', $data);
    }

    public function comments()
    {
        $com = Comment::viewAllComent();
        return view('pages.user.Posts')->with('com', $com);
    }

    /**s
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    //update the current post
    public function updatePost()
    {
        if (\Request::ajax()) {
            $data = \Input::all();
            Submission::newPost($data);
            echo $data['currentPost'];
        }
    }


    public function likeIncrease()
    {

        if (\Input::ajax()) {
            $data = \Input::all();

            //		$input['post_id']=$request->input('id');
//		$input['user_id']=$request->input('userid');
//		$input['like']=true;
//
//		Like::create($input);


            $like = new Like();

            $like->user_id = $data['user_id'];
            $like->post_id = $data['post_id'];
            $like->like = true;

            $like->save();

            $currentLikes = DB::table('submissions')
                ->select('no_of_votes')
                ->where('id', '=', $data['post_id'])
                ->get();

            DB::table('submissions')
                ->where('id', '=', $data['post_id'])
                ->update(['no_of_votes' =>'$currentLikes'+1]);

//            var_dump($data['like_count']);
            $LikeCount = Like::where('like', '=', 1)->where('post_id', '=', $data['post_id'])->count();

            echo $LikeCount . ' likes';

        }

    }

    public function likeDecraese()
    {
        if (\Input::ajax()) {
            $data = \Input::all();

           $like=new Like();

     //check whether he has liked before
            $count=Like::where('user_id','=',$data['user_id'])
                        ->where('post_id','=',$data['post_id'])
                        ->count();

            $like->user_id=$data['user_id'];
            $like->post_id=$data['post_id'];
            $like->like=false;
            $like->save();

            $currentDisLikes = DB::table('submissions')
                ->select('no_of_dislikes')
                ->where('id', '=', $data['post_id'])
                ->get();

            DB::table('submissions')
                ->where('id', '=', $data['post_id'])
                ->update(['no_of_dislikes' =>'$currentDisLikes'+1]);

           $LikeCount=Like::where('like','=',0)->where('post_id','=',$data['post_id'])->count();
           echo $LikeCount.' dislikes';

        }

    }

}
