<?php
/**
 * Created by PhpStorm.
 * User: mrfro
 * Date: 09.11.2018
 * Time: 11:40
 */

namespace App;


class Comment extends Model
{
    public function post()
    {
        return $this->belongsto(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
