<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostForm extends Request {

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
				"name"    =>    "required|min:3|max:45",
				"lastname"		 =>		 "required|min:3|max:45"
				"email"		 =>		 "required|min:3|max:45"
				"username"		 =>		 "required|min:3|max:45"
				"password"		 =>		 "required|min:3|max:45"
				"type"		 =>		 "required|min:3|max:45"
				"state"		 =>		 "required|min:3|max:45"
		];
	}

	public function messages()
	{
	    return [
	        'name.required' => 'El campo title es requerido!',
	        'name.min' => 'El campo title no puede tener menos de 5 carácteres',
			'name.min' => 'El campo title no puede tener más de 45 carácteres',
			'lastname.required' => 'El campo title es requerido!',
	        'lastname.min' => 'El campo title no puede tener menos de 5 carácteres',
			'lastname.min' => 'El campo title no puede tener más de 45 carácteres',
			'email.required' => 'El campo title es requerido!',
	        'email.min' => 'El campo title no puede tener menos de 5 carácteres',
			'email.min' => 'El campo title no puede tener más de 45 carácteres',
			'username.required' => 'El campo title es requerido!',
	        'username.min' => 'El campo title no puede tener menos de 5 carácteres',
			'username.min' => 'El campo title no puede tener más de 45 carácteres',
			'password.required' => 'El campo title es requerido!',
	        'password.min' => 'El campo title no puede tener menos de 5 carácteres',
			'password.min' => 'El campo title no puede tener más de 45 carácteres',
			'type.required' => 'El campo title es requerido!',
	        'type.min' => 'El campo title no puede tener menos de 5 carácteres',
			'type.min' => 'El campo title no puede tener más de 45 carácteres',
			'state.required' => 'El campo title es requerido!',
	        'state.min' => 'El campo title no puede tener menos de 5 carácteres',
			'state.min' => 'El campo title no puede tener más de 45 carácteres',
	    ];
	}
}