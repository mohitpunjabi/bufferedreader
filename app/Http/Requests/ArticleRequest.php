<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
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
            'title'     => 'required',
            'content'   => 'required',
            'slug'      => 'required'
        ];
	}

    /**
     * Adds the slug to the input.
     *
     * @return array
     */
    public function all()
    {
        $data = parent::all();
        $data['slug'] = str_slug($data['title']);
        return $data;
    }


}
