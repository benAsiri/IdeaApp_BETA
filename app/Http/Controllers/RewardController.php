<?php namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests;
use App\Reward;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Submission;
use App\User;


class RewardController extends Controller
{
    public function getLikesForSub(Request $request)
    {
        //$pid = $request['postId'];

        $submissions = DB::table('users')
            ->join('submissions', 'users.id', '=', 'submissions.user_id')
            ->select('users.name','submissions.user_id' ,'submissions.no_of_votes','submissions.id','submissions.post')
            //->where('comments.pid',$pid)
            //->paginate(10);
            ->orderBy('no_of_votes', 'desc')
            ->get();
        return view('SubRewards',compact('submissions'));
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
        return view('ComRewards', compact('comments'));
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
}