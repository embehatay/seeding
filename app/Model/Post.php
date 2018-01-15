<?php

namespace App\Model;

class Post extends General
{
    protected $table = 'post';
    protected $fillable = ['postid', 'uid', 'time_update', 'count_comment', 'tmid'];

    public function account()
    {
        return $this->belongsTo('App\Model\Account', 'uid', 'uid');
    }

    public function comment()
    {
        return $this->hasMany('App\Model\Comment');
    }
}
