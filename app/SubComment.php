<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubComment extends Model
{
    protected $fillable = [
        'user_id',
        'comment_id',
        'sub_comment'
    ];

    protected $with = ['user'];

    function comment(){
        return $this->belongsTo('App\Comment');
    }

    function user(){
        return $this->belongsTo('App\User');
    }
}
