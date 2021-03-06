<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model {

    protected $fillable=['user_id','post_id','like'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function submission()
    {
        return $this->belongsTo('App\Submission');
    }

}
