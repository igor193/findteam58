<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ["user_id", "topic", "slug", "entry", "body", "city"];

    public function user() {
        return $this->belongsTo("App\User");
    }

    public function category() {
        return $this->belongsToMany("App\Models\Portal\Category");
    }

    public function comments() {
        return $this->hasMany("App\Models\Portal\Comment");
    }
}
