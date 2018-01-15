<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'seeding' => 'required|integer|min:0',
            'collect_post' => 'required|integer|min:0',
            'max_comment_1time_sacc' => 'required|integer|min:0',
            'distance_sama' => 'required|integer|min:0',
            'max_cm_1post' => 'required|integer|min:0',
            'delay_post_comment' => 'required|integer|min:0',
            'on_seed' => 'required|integer|min:0',
            'on_collect' => 'required|integer|min:0',
            'addfriend' => 'required|integer|min:0',
            'timer_like' => 'required|integer|min:0',
        ];
    }

    public function messages()
    {
        return [
            'seeding.integer' => 'Seeding phải là số nguyên',
            'seeding.min' => 'Seeding phải lớn hơn 0',
            'seeding.required' => 'Seeding không được để trống',
            'collect_post.integer' => 'collect_post phải là số nguyên',
            'collect_post.min' => 'collect_post phải lớn hơn 0',
            'collect_post.required' => 'Seeding không được để trống',
            'max_comment_1time_sacc.integer' => 'max_comment_1time_sacc phải là số nguyên',
            'max_comment_1time_sacc.min' => 'max_comment_1time_sacc phải lớn hơn 0',
            'max_comment_1time_sacc.required' => 'Seeding không được để trống',
            'distance_sama.integer' => 'distance_sama phải là số nguyên',
            'distance_sama.min' => 'distance_sama phải lớn hơn 0',
            'distance_sama.required' => 'Seeding không được để trống',
            'max_cm_1post.integer' => 'max_cm_1post phải là số nguyên',
            'max_cm_1post.min' => 'max_cm_1post phải lớn hơn 0',
            'max_cm_1post.required' => 'Seeding không được để trống',
            'delay_post_comment.integer' => 'delay_post_comment phải là số nguyên',
            'delay_post_comment.min' => 'delay_post_comment phải lớn hơn 0',
            'delay_post_comment.required' => 'Seeding không được để trống',
            'on_seed.integer' => 'on_seed phải là số nguyên',
            'on_seed.min' => 'on_seed phải lớn hơn 0',
            'on_seed.required' => 'Seeding không được để trống',
            'on_collect.integer' => 'on_collect phải là số nguyên',
            'on_collect.min' => 'on_collect phải lớn hơn 0',
            'on_collect.required' => 'Seeding không được để trống',
            'addfriend.integer' => 'addfriend phải là số nguyên',
            'addfriend.min' => 'addfriend phải lớn hơn 0',
            'addfriend.required' => 'Seeding không được để trống',
            'timer_like.integer' => 'timer_like phải là số nguyên',
            'timer_like.min' => 'timer_like phải lớn hơn 0',
            'timer_like.required' => 'Seeding không được để trống',
        ];
    }
}
