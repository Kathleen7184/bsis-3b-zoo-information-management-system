<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    protected $fillable = [
        'hab_name',
    ];

    public function animals()
    {
        return $this->hasMany(Animal::class);
    }

}
