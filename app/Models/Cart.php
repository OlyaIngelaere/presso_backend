<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Capsule;

class Cart extends Model
{
    protected $table = 'cart';        // table name
    protected $fillable = ['capsule_id', 'quantity'];   // allow mass assignment

    /**
     * Relationship: each cart item belongs to one capsule.
     */
    public function capsule()
    {
        return $this->belongsTo(Capsule::class);
    }
}