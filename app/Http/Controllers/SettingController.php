<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use App\Model\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function getIndex() {
        $setting = Setting::get();
        $total = Setting::count();
        return view('admin.setting.index', compact('setting', 'total'));
    }

    public function getEdit($id) {
        $setting = Setting::findOrFail($id);
        return view('admin.setting.edit', compact('setting'));
    }

    public function postEdit($id, SettingRequest $settingRequest) {
        if(request()->percent_like) {
            $this->validate($settingRequest, [
                'percent_like' => 'integer|min:0',
            ], [
                'percent_like.integer' => 'percent_like phải là số nguyên',
                'percent_like.min' => 'percent_like phải lớn hơn 0',
            ]);
        }

        $setting = Setting::findOrFail($id);
        $setting->seeding = $settingRequest->seeding;
        $setting->collect_post = $settingRequest->collect_post;
        $setting->max_comment_1time_sacc = $settingRequest->max_comment_1time_sacc;
        $setting->distance_sama = $settingRequest->distance_sama;
        $setting->max_cm_1post = $settingRequest->max_cm_1post;
        $setting->delay_post_comment = $settingRequest->delay_post_comment;
        $setting->on_seed = $settingRequest->on_seed;
        $setting->on_collect = $settingRequest->on_collect;
        $setting->addfriend = $settingRequest->addfriend;
        $setting->timer_like = $settingRequest->timer_like;
        $setting->percent_like = $settingRequest->percent_like;
        $setting->save();
        return redirect()->route('admin.setting.getIndex')->with(['flash_message' => 'Cập nhật thành công', 'flash_level' => 'success']);
    }
}
