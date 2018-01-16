<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('show-account');
        $user = User::paginate(10);
        $total = User::count();
        return view('admin.user.index', compact('user', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $userRequest)
    {
        $user = new User();
        $user->name = removeExtraSpaces($userRequest->name);
        $user->username = trim($userRequest->username);
        $user->password = bcrypt($userRequest->password);
        $user->level = $userRequest->level;
        $user->save();

        return redirect()->route('admin.user.index')->with(['flash_message' => 'Thêm người dùng thành công', 'flash_level' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $userRequest, $id)
    {
        $user = User::findOrFail($id);
        print_data($user->password);
        if (!Hash::check(request()->password, $user->password)) {
            return redirect()->route('admin.user.edit', $id)->with(['flash_message' => 'Sai mật khẩu', 'flash_level' => 'danger']);
        }
        $user->update($userRequest->all());
        return redirect()->route('admin.user.index')->with(['flash_message' => 'Cập nhật thành công', 'flash_level' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
