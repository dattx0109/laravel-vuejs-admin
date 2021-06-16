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
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Đây là trường bắt buộc',
            'email.required' => 'Đây là trường bắt buộc',
            'email.unique' => 'Email đã được đăng ký',
            'email.email' => 'Không đúng định dạng email',
            'password.required' => 'Đây là trường bắt buộc',
            'confirm_password.required' => 'Đây là trường bắt buộc',
            'confirm_password.same' => 'Mật khẩu không khớp'
        ];
    }
}
