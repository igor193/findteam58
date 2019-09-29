<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ["user_id", "topic", "slug", "entry", "body"];

    public function user() {
        return $this->belongsTo("App\User");
    }

    public function categories() {
        return $this->belongsToMany("App\Models\Portal\Category");
    }
}
