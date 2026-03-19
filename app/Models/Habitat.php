<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Habitat extends Model
{
   protected $fillable = [
        'hab_name',
        'hab_temp',
    ];

    public function animals()
    {
        return $this->hasMany(Animal::class);
    }
}
