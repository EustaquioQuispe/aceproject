<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProjectForm extends Request {

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
			"name"    =>    "required|min:5|max:45",
			"description"		 =>		 "required|min:5|max:500",
			"date_create"	=>		"required|min:10|max:20"
		];
	}

	public function messages()
	{
	    return [
	        'name.required' => 'El campo title es requerido!',
	        'name.min' => 'El campo title no puede tener menos de 5 carácteres',
			'name.min' => 'El campo title no puede tener más de 45 carácteres',
			'description.required' => 'El campo body es requerido!',
	        'description.min' => 'El campo body no puede tener menos de 5 carácteres',
			'description.min' => 'El campo body no puede tener más de 500 carácteres',
	    ];
	}

}
