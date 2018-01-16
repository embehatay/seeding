<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use App\Model\Setting;

class SettingController extends Controller
{
    public function getIndex()
    {
        $setting = Setting::get();
        $total = Setting::count();
        return view('admin.setting.index', compact('setting', 'total'));
    }

    public function getEdit($id)
    {
        $setting = Setting::findOrFail($id);
        return view('admin.setting.edit', compact('setting'));
    }

    public function postEdit($id, SettingRequest $settingRequest)
    {
        if (request()->percent_like) {
            $this->validate($settingRequest, [
                'percent_like' => 'integer|min:0',
            ], [
                'percent_like.integer' => 'percent_like phải là số nguyên',
                'percent_like.min' => 'percent_like phải lớn hơn 0',
            ]);
        }
        $data = $settingRequest->all();
        $setting = Setting::findOrFail($id);
        $setting->update($data);
        return redirect()->route('admin.setting.getIndex')->with(['flash_message' => 'Cập nhật thành công', 'flash_level' => 'success']);
    }
}
