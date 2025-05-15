<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Capsule extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'type', 'image', 'description', 'flavour_profile'];
}