<?php namespace App\Http\Controllers;

use App\Issue;

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
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $issue = Issue::latest()->first();
        if(!$issue) abort(503);
		return redirect(url_issue($issue));
	}

    public function about()
    {
        return view('about');
    }

}