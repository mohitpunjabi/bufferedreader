<?php namespace App\Http\Controllers;

use App\Author;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\AuthorRequest;
use Illuminate\Http\Request;

class AuthorsController extends Controller {

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
		$authors = Author::all();
        return view('authors.index', compact('authors'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param AuthorRequest $request
     * @return Response
     */
	public function store(AuthorRequest $request)
	{
		$author = new Author($request->all());
        $author->save();
        return redirect()->back();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param Author $author
     * @return Response
     * @internal param int $id
     */
	public function edit(Author $author)
	{
        return view('authors.edit', compact('author'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param Author $author
     * @param AuthorRequest $request
     * @return Response
     * @internal param int $id
     */
	public function update(Author $author, AuthorRequest $request)
	{
		$author->update($request->all());
        return redirect()->route('authors.index');
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
