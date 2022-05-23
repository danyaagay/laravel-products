<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function scopeAvailable($query) {
        return $query->where('status', 'available')->get();
    }
}
