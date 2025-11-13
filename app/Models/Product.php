<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    // Désactive l’auto-incrément pour la clé primaire
    public $incrementing = false;

    // Indique que la clé primaire est une string
    protected $keyType = 'string';

    // Attributs remplissables
    protected $fillable = [
        'name',
        'price',
        'image',
        'category',
        'area',
        'dish_type',
    ];

    // Générer automatiquement un UUID à la création
    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
}
