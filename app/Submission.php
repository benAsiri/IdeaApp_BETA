<?php namespace App;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Submission extends Model {

	protected $fillable=['post','category','date','no_of_votes','user_id','no_of_dislikes'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    public static function categoryViceSubmission($category)
    {
        $submission=DB::table('submissions')->where('category',$category)->orderBy('date','desc')->get();;

        return $submission;
    }

    public static function AllSubmission()
    {
        $submission=DB::table('submissions')->orderBy('date','desc')->get();

        return $submission;
    }

    public static function viewAllSubmission()
    {
        $submission=DB::table('submissions')->get();;

        return $submission;
    }

    public static function AllSubmissionWithDetails()
    {
        $submission=DB::table('submissions')
                    ->join('users', 'users.id', '=', 'submissions.user_id')
                    ->select('users.name','submissions.user_id' ,'submissions.no_of_votes','submissions.id',
                            'submissions.post','submissions.category',
                            'submissions.no_of_dislikes','submissions.Image','submissions.date')
                    ->orderBy('date', 'desc')
                    ->get();
        return $submission;
    }


    /*
    public static function newPost($data){
        //DB::insert('insert into submissions (cate,post) values (?, ?)', [1, 'Dayle']);
        $s = new Submission();
        $s->post = $data['currentPost'];
        $s->category= $data['currentCat'];
        $s->user_id= \Auth::user()->id;
        $s->date=Carbon::now();
        $s->save();
    }*/

/*    public static function createSubmission(Request $request)
    {
        $submission = new Submission();
        return $submission;
    } */
}

