<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class IssueRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
    {
        return Auth::user();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'name'              => 'required',
            'slug'              => 'required',
            'pdf_link'          => 'required|url',
            'cover_page'        => 'image',
            'jumbotron_photo'   => 'image',
		];
	}

    public function all()
    {
        $data = parent::all();
        $data['slug'] = str_slug($data['name']);

        Cache::forget('all-issues');
        return $data;
    }

}
