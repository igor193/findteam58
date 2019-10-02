<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = ["name", "slug"];

    public function category() {
        return $this->belongsToMany("App\Models\Portal\Category");
    }
}
