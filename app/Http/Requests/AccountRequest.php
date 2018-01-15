<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'name' => 'alpha_spaces',
            'user' => 'alpha_num|unique:account,user',
            'pass' => 'min:6|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'name.alpha_spaces' => 'Họ tên chỉ cho phép kí tự và khoảng trắng',
            'user.alpha_num' => 'Username chỉ chứa kí tự và số',
            'user.unique' => 'Username đã tồn tại',
            'pass.min' => 'Mật khẩu tối thiểu 6 kí tự',
            'pass.confirmed' => 'Nhập lại mật khẩu bị sai',
        ];
    }
}
