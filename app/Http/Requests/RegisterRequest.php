<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'username' => [
                'required',
            ],
            'email' => [
                'required',
                'email',
            ],
            'password' => [
                'required',
                'confirmed',
                'max:7',
            ],
        ];
    }

    public function messages()
    {
        return [
            'required' => __('validation.required'),
            'confirmed' => __('validation.confirmed'),
            'email' => __('validation.email'),
            'max' => __('validation.max'),
        ];
    }
}
