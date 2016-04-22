<?php namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Comment extends Model {

    protected $fillable=['date','comment','no_of_votes','uid','pid'];
	//
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function submission()
    {
        return $this->belongsTo('App\Submission');
    }

    public static function WriteComm($date,$comment,$no_of_votes,$uid,$pid)
    {
        DB::insert('insert into comments (date,comment,no_of_votes,uid,pid) values (?, ?, ?, ?, ?)', [$date, $comment,"",$uid,$pid]);;
    }

    public static function viewAllComent()
    {
        $comment=DB::table('comments')->get();;

        return $comment;
    }
}
