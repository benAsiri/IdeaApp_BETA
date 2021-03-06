<?php namespace App;

use App\Like;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{

    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'user_type', 'email', 'password', 'image','faculty','dob'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];


    public function submissions()
    {
        return $this->hasMany('App\Submission');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function rewards()
    {
        return $this->hasMany('App\Reward');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    public function notifications()
    {
        return $this->hasMany('App\Notification');
    }

    public function hasLikedStatus(Like $likes)
    {
//        return(bool) $likes->id
//        where('user_id',\Auth::user()->id)

    }

}
