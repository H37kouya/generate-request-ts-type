<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'       => 'string|nullable',
            'email'      => 'string',
            'number'     => 'integer|nullable',
            'digits'     => 'digits:3|nullable',
            'ids'        => 'array|nullable',
            'ids.*'      => 'integer',
            'codes'      => 'array',
            'codes.*'    => 'string|nullable',
            'mainImage1' => 'file',
            'mainImage2' => 'image',
            'images'     => 'array|nullable',
            'images.*'   => 'file',
        ];
    }
}
