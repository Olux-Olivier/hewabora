<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    // Attributs remplissables
    protected $fillable = [
        'name',
        'price',
        'image',
        'category',
        'area',
        'dish_type',
    ];

    
}
