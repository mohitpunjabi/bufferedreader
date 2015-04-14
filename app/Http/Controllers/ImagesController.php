<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class ImagesController extends Controller {

    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $files = File::allFiles("img/");
        $images = [];
        foreach($files as $file) array_push($images, str_replace('\\', '/', (string) $file));
        return view('images.index', compact('images'));
    }

    public function store(Request $request)
    {
        $image = img_save($request->file('image'));
        Session::flash('image_path', '/img/'.$image);
        return redirect()->back();
    }

}
