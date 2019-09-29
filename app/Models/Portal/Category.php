<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ["slug", "name"];

    public function posts() {
        return $this->belongsToMany("App\Models\Post");
    }

    public function attributes() {
        return $this->belongsToMany("App\Models\Attribute");
    }
}
