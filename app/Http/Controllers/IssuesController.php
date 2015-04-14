<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\IssueRequest;
use App\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class IssuesController extends Controller {

    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('issues.index', ['issues' => Issue::all()]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('issues.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param IssueRequest $request
     * @return Response
     */
	public function store(IssueRequest $request)
	{
		$issue = new Issue($request->all());
        $issue->save();
        return redirect('issues');
	}

    /**
     * Display the specified resource.
     *
     * @param Issue $issue
     * @return Response
     * @internal param int $id
     */
	public function show(Issue $issue)
	{
        $articles = $issue->articles()->visible()->get();
		return view('issues.show', compact(['issue', 'articles']));
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param Issue $issue
     * @return Response
     * @internal param int $id
     */
	public function edit(Issue $issue)
	{
		return view('issues.edit', compact('issue'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param Issue $issue
     * @param IssueRequest $request
     * @return Response
     * @internal param int $id
     */
	public function update(Issue $issue, IssueRequest $request)
	{
		$issue->update($request->all());
        return redirect(url_issue($issue));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
