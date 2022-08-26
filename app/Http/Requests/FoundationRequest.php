<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoundationRequest extends FormRequest
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
        return [
            'name'=>'required|string',
            'Icon'=>'nullable',
            'color'=>'nullable',
            'Description'=>'string|max:255',
            'with_doses'=>'required'
        ];
    }
}
