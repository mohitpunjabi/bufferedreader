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
     * @param Issue $issue
     * @return Response
     */
	public function create(Issue $issue)
	{
		return view('articles.create', compact('issue'));
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param ArticleRequest $request
     * @param Issue $issue
     * @return Response
     */
	public function store(ArticleRequest $request, Issue $issue)
	{
		$article = new Article($request->all());
        $article->slug = str_slug($request->title);
        $article->published = false;
        $issue->articles()->save($article);
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
     * @param Issue $issue
     * @param Article $article
     * @return Response
     * @internal param int $id
     */
	public function edit(Issue $issue, Article $article)
	{
        return view('articles.edit', compact('article'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param Issue $issue
     * @param Article $article
     * @param ArticleRequest $request
     * @return Response
     * @internal param int $id
     */
	public function update(Issue $issue, Article $article, ArticleRequest $request)
	{
        $article->update($request->all());
        return redirect(url_article($article));
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
