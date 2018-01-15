<?php

namespace App\Model;

class Comment extends General
{
    protected $table = 'comment';
    protected $fillable = ['id', 'postid', 'suid', 'content', 'mtime'];

    public function account()
    {
        return $this->belongsTo('App\Model\Account', 'suid', 'uid');
    }

    public function post()
    {
        return $this->belongsTo('App\Model\Post', 'postid', 'postid');
    }
}
