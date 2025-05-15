<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['order_data'];  // allow order_data to be saved

    protected $casts = [
        'order_data' => 'array',    // automatically convert JSON to array
    ];
}