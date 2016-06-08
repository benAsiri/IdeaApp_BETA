<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratings extends Model {
    //comment ekata meh tharam reward tiyeee
    //postID
    //USERid--->eka parak pamanai
    //ratingID

    protected $table = 'ratings';

    protected $fillable=['post_id','user_id','rating'];

    //mapping
    public function Submission(){
        return $this->hasOne('App\Submission');
    }

    public function User() {
        return $this->hasOne('App\User');
    }
}
