<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Need extends Model
{
    protected $fillable = [
        'food_name',
        'animal_needs',
    ];

    public function animals()
    {
        return $this->hasMany(Animal::class);
    }
}
