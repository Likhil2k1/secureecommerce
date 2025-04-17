<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}

