<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ArticleRequest;
use App\Issue;
use Illuminate\Http\Request;

class ArticlesController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
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
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $issues = Issue::all()->lists('name', 'id');
		return view('articles.create', compact('issues'));
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param ArticleRequest $request
     * @return Response
     */
	public function store(ArticleRequest $request)
	{
		$article = new Article($request->all());
        $article->slug = str_slug($request->title);
        $article->published = false;
        $article->save();
        return redirect(url_article($article));
	}

    /**
     * Display the specified resource.
     *
     * @param Article $article
     * @param Issue $issue
     * @return Response
     * @internal param int $id
     */
	public function show(Issue $issue, Article $article)
	{
		return view('articles.show', compact('article'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
