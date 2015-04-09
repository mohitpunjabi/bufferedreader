<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class IssueRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
//      TODO return Auth::user();
        return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'slug' => 'required|alpha_dash',
            'name' => 'required',
            'cover_page' => 'required|image',
            'jumbotron_photo' => 'required|image',
		];
	}

}
