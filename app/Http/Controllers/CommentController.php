<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Comment;
use App\Model\Account;

class CommentController extends Controller
{
    public function getIndex() {
        // Lấy hết dữ liệu truyền sang view
        $comment = Comment::paginate(10);
        $total = Comment::count();
        // Nếu có lọc thì ghi đè dữ liệu trước khi truyền sang view
        $postid = request()->post_id;
        $user_name = request()->user_name;
        $cond = array();
        if (!empty($user_name)) {
            $cond['like'][] = array('name', $user_name);
            $uids = Account::getItemByCondition($cond, 'uid')->get()->toArray();
            $cond['like'] = array();
            $cond['where_in'] = array('suid', $uids);
        }
        if (!empty($postid)) {
            $cond['like'][] = array('postid', $postid);
        }
        if ($cond) {
            $comment = Comment::getItemByCondition($cond, '*')->paginate(10);
            $total = count(Comment::getItemByCondition($cond, '*')->get());
            $comment->appends(['post_id' => $postid, 'user_name' => $user_name]);
        }
        return view('admin.comment.index', compact('comment', 'total'));
    }
}
