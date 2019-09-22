<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ["topic", "slug", "entry", "body"];

    public function user() {
        return $this->belongsTo("App\User");
    }
}
