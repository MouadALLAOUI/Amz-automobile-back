<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsMake extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function models()
    {
        return $this->hasMany(CarsModel::class);
    }

    public function vehicule()
    {
        return $this->hasMany(Vehicule::class, 'vehicule');
    }
}