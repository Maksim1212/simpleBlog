<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['title', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }

    public function scopeFilter($query, $filters)
    {
        //if (empty ($filters)) {return $query; }
        /*
                if ($month = $filters['month']) {

                    $query->whereMonth('created_at', Carbon::parse($month)->month);
                }

                if ($year = $filters['year']) {

                    $query->whereYear('created_at', $year);
                }*/
    }

}
