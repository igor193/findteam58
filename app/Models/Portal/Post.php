<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user() {
        return $this->belongsTo("App\User");
    }
}
