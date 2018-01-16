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
        $id = $this->route('id');
        return [
            'name' => 'alpha_spaces',
            'username' => 'alpha_num|unique:users,username,' . $id . ',id',
            'password' => 'min:6|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.alpha_spaces' => 'Họ tên chỉ cho phép kí tự và khoảng trắng',
            'username.alpha_num' => 'Username chỉ chứa kí tự và số',
            'username.unique' => 'Username đã tồn tại',
            'password.min' => 'Mật khẩu tối thiểu 6 kí tự',
            'password.confirmed' => 'Nhập lại mật khẩu bị sai',
        ];
    }
}
