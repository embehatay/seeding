<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Model\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function getIndex()
    {
        $account = Account::paginate(10);
        $total = Account::count();
        return view('admin.account.index', compact('account', 'total'));
    }

    public function getAdd() {
        $this->authorize('add-account');
        return view('admin.account.add');
    }

    public function postAdd(AccountRequest $accountRequest)
//    public function postAdd(Request $productRequest)
    {
        if($accountRequest->phone) {
            $this->validate($accountRequest, [
               'phone' => array('regex:/^0[0-9]{9}[0-9]?$/')
            ], [
                'phone.regex' => 'Số điện thoại không hợp lệ (chỉ bao gồm 10 hoặc 11 số và bắt đầu bằng số 0)'
            ]);
        }
        $account = new Account();

        $account->uid = time();
        $account->name = removeExtraSpaces($accountRequest->name);
        $account->user = trim($accountRequest->user);
        $account->pass = bcrypt($accountRequest->pass);
        $account->type = 1;
        $account->phone = $accountRequest->phone;
        $account->info = $accountRequest->info;
        $account->save();

        return redirect()->route('admin.account.getIndex')->with(['flash_message' => 'Thêm Account thành công', 'flash_level' => 'success']);
    }

    public function getEdit($id)
    {
        if(Auth::user()->uid == $id) {
            $this->authorize('self-edit');
        } else {
            $this->authorize('edit-account');
        }
        $account = Account::findOrFail($id);
        return view('admin.account.edit', compact('account'));
    }

    public function postEdit($id)
    {
        $account = Account::findOrFail($id);
//        print_data(bcrypt(request()->pass));
        if(!Hash::check(request()->pass, $account->pass)) {
            return redirect()->route('admin.account.getEdit', $id)->with(['flash_message' => 'Sai mật khẩu', 'flash_level' => 'danger']);
        }
        if($account->user !== request()->user) {
            $this->validate(request(), [
                'user' => 'alpha_num|unique:account,user',
            ], [
                'user.alpha_num' => 'Username chỉ chứa kí tự và số',
                'user.unique' => 'Username đã tồn tại',
            ]);
        }
        $this->validate(request(), [
            'name' => 'alpha_spaces',
            'pass' => 'min:6'
        ], [
            'name.alpha_spaces' => 'Họ tên chỉ cho phép kí tự và khoảng trắng',
            'pass.min' => 'Mật khẩu tối thiểu 6 kí tự',
        ]);

        if(request()->phone) {
            $this->validate(request(), [
                'phone' => array('regex:/^0[0-9]{9}[0-9]?$/')
            ], [
                'phone.regex' => 'Số điện thoại không hợp lệ (chỉ bao gồm 10 hoặc 11 số và bắt đầu bằng số 0)'
            ]);
        }

        $account->name = removeExtraSpaces(request()->name);
        $account->user = trim(request()->user);
        $account->pass = bcrypt(request()->pass);
        $account->phone = request()->phone;
        $account->info = request()->info;
        $account->save();

        return redirect()->route('admin.account.getIndex')->with(['flash_message' => 'Cập nhật Account thành công', 'flash_level' => 'success']);
    }

    public function getDelete($uid)
    {
        $this->authorize('delete-account');
        $account = Account::findOrFail($uid);
        $account->delete();

        return redirect()->route('admin.account.getIndex')->with(['flash_message' => 'Xóa Account thành công', 'flash_level' => 'success']);
    }
}
