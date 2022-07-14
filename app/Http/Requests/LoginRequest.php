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
            'password' => [
                'required',
                'max:7',
            ],

        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute bắt buộc phải điền',
            'max' => ':attribute không được lớn hơn :max ký tự',
        ];
    }
}
