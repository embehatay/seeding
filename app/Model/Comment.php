<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends General
{
    protected $table = 'comment';
    protected $fillable = ['id', 'postid', 'suid', 'content', 'mtime'];
    // public $timestamps = false;

    public function account() {
        return $this->belongsTo('App\Model\Account', 'suid', 'uid');
    }

    public function post() {
        return $this->belongsTo('App\Model\Post', 'postid', 'postid');
    }
}
