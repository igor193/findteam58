<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ["user_id", "post_id", "parent_id", "messege", "publication"];

    public function user() {
        return $this->belongsToMany("App\Models\User");
    }

    public function post() {
        return $this->belongsToMany("App\Models\Portal\Post");
    }
}
