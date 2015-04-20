<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Image;
use App\Tag;
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

    public function index(Request $request)
    {
        $tags = Tag::all()->lists('tag', 'id');
        $filteredTags = $request->get('tag_filter_list');
        $images = Image::filterByTags($request->get('tag_filter_list'))->get();

        return view('images.index', compact('images', 'tags', 'filteredTags'));
    }

    public function store(Request $request)
    {
        $imageName = img_save($request->file('image'), $this->getAllTags($request->get('tag_list')));
        return redirect()->back();
    }

    private function getAllTags(array $tags)
    {
        $ids = [];
        foreach($tags as $tag)
        {
            if(!is_numeric($tag))
            {
                $newTag = new Tag();
                $newTag->tag = $tag;
                $newTag->save();
                array_push($ids, $newTag->id);
            }
            else
                array_push($ids, $tag);
        }

        return Tag::whereIn('id', $ids)->get();
    }

}