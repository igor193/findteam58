<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ["name", "description", "slug", "group"];
}
