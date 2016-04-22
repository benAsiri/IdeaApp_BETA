<?php namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Submission extends Model {

	protected $fillable=['post','category','date','no_of_votes','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public static function categoryViceSubmission($category)
    {
        $submission=DB::table('submissions')->where('category',$category)->get();;

        return $submission;
    }

    public static function AllSubmission()
    {
        $submission=DB::table('submissions')->get();;

        return $submission;
    }

    public static function viewAllSubmission()
    {
        $submission=DB::table('submissions')->get();;

        return $submission;
    }

/*    public static function createSubmission(Request $request)
    {
        $submission = new Submission();
        return $submission;
    } */
}

