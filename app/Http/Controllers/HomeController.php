<?php namespace App\Http\Controllers;
use App\Submission;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	public function __construct()
	{
		$this->middleware('auth');
	}


	/*
	|--------------------------------------------------------------------------
	| AuthSeperate Function
	|--------------------------------------------------------------------------
	|
	| This function will Seperate both User and Admin from the login page
	|
	*/
	public function index()
	{
		$data=Submission::all();
		if (Auth::user()->user_type == 'USER'){
			return view('pages.user.adminstrative')->with('data',$data);
		}elseif(Auth::user()->user_type == 'ADMIN'){
			//return "OK"; Admin page comes here
			return view('auth.login');

		}
	}

	/**
	 * @return mixed
     */
	public function loadProfile()
	{
		 return view('pages.user.adminProfilePage')->with('user',\Auth::user());
	}

	public function resetPassword(){
		return view('emails.password');
	}

	public function registerMe(){
		return view('auth.register');
	}

	public function logoutMe(){
		\Auth::logout(); // clear the session that i have already logged in
		return view('auth.login');
	}

}
