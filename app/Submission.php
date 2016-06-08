<?php namespace App;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Submission extends Model {

	protected $fillable=['post','category','date','no_of_votes','user_id','no_of_dislikes','rating'];

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
        $submission=DB::table('submissions')->get();;

        return $submission;
    }

    public static function viewAllSubmission()
    {
        $submission=DB::table('submissions')->get();;

        return $submission;
    }


    public function Ratings()
    {
        return $this->hasMany('App\Ratings');
    }

}

