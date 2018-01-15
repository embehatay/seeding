<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'setting';
    protected $fillable = ['seeding', 'collect_post', 'max_comment_1time_sacc', 'distance_sama', 'max_cm_1post', 'delay_post_comment', 'on_seed', 'on_collect', 'addfriend', 'timer_like', 'percent_like'];
    public $timestamps = false;
}
