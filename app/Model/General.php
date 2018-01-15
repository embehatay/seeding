<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected static function getItemByCondition($cond = array(), $field = '')
    {
        $qr = static::select($field);
        if(!empty($cond['where'])) {
            foreach ($cond['where'] as $rule) {
                $qr->where($rule[0], $rule[1]);
            }
        }
        if (!empty($cond['like'])) {
            foreach ($cond['like'] as $rule) {
                $qr->where($rule[0], 'like', '%' . $rule[1] . '%');
            }
        }
        if (!empty($cond['where_in'])) {
            $qr->whereIn($cond['where_in'][0], $cond['where_in'][1]);
        }
        return $qr;
    }
}
