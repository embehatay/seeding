<?php

namespace App\Http\Controllers;

use App\Model\Account;
use Illuminate\Http\Request;
use App\Model\Post;

class PostController extends Controller
{
    public function getIndex() {
        // Lấy hết dữ liệu truyền sang view
        $post = Post::paginate(10);
        $total = Post::count();
        // Nếu có lọc thì ghi đè dữ liệu trước khi truyền sang view
        $postid = request()->post_id;
        $user_name = request()->user_name;
        $cond = array();
        if(!empty($user_name)) {
            $cond['like'][] = array('name', $user_name);
            $uids = Account::getItemByCondition($cond, 'uid')->get()->toArray();
            $cond['like'] = array();
            $cond['where_in'] = array('uid', $uids);
        }
        if(!empty($postid)) {
            $cond['like'][] = array('postid', $postid);
        }
        if($cond) {
            $post = Post::getItemByCondition($cond, '*')->paginate(10);
            $total = count(Post::getItemByCondition($cond, '*')->get());
            $post->appends(['post_id' => $postid, 'user_name' => $user_name]);
        }
        return view('admin.post.index', compact('post', 'total'));
    }
}
