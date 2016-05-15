<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */


	public function index()
	{
			return view('auth.login');
	}

	public function getCode(){

		$R= \Input::all();
		if(\Request::ajax()){

			$transport = \Swift_SmtpTransport::newInstance('stmp.gmail.com',465,'ssl')
					->setUsername('namila.mail.tester@gmail.com')
					->getPassword('0771950394');

			$mailer = \Swift_Mailer::newInstance($transport);

			$message =\Swift_Message::newInstance()
				->setSubject('password')
				->setFrom('namila.mail.tester@gmail.com','chalitha')
				->setTo('chalithamaduranga123@gmail.com')
				->setBody('Your Code is : '.rand(1000,4000));

			$numSent = $mailer->send($message);
			printf("Sent %d message\n", $numSent);
		}

	}

	public function resetPassword(){
		return view('auth.reset');
	}
}
