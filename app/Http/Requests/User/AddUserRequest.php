<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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
            'txtEmail' => 'unique:users,email',
            'txtUsername' => 'unique:users,username',
        ];
    }
    public function messages()
    {
        return [
           'txtEmail.unique' => 'Email này đã tồn tại trên hệ thống. Vui lòng chọn một email khác!',
           'txtUsername.unique' => 'Tên đăng nhập này đã tồn tại trên hệ thống. Vui lòng chọn một email khác!',
        ];
    }
}
