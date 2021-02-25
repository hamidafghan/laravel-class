<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
            'message' => 'required|string|min:3|max:50',
            'email' => 'required|email|',
            'image' => "file|image|min:200|max:".(1024*3),
            'dob' => 'required|date|after:2020-10-10|before:2021-10-10'
        ];
    }

    public function attributes()
    {
        return [
            'dob' => 'Date of birth',
            'email' => 'Email address'
        ];
    }
}
