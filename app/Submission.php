<?php namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

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
}

