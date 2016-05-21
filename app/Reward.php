<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Reward extends Model {

	//
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function notification()
    {
        return $this->hasOne('App/Notification');
    }

}
