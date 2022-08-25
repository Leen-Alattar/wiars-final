<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
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
        /**
         * d
         * name
         * 	email
         * 	email_verified_at
         * 	date_of_birth
         * 	national_num
         * password
         * remember_token
         * 	role_id
         * 	is_vaccine
         * 	created_at	updated_at

         *
        */
        return [
            'name'=>'required|string',
            'email'=>'email|required',
            'date_of_birth'=>'required',
            'password'=>'required',
            'role_id'=>'required',
            'national_num'=>'required|numeric|min:10'
        ];
    }
}
