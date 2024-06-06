<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $table = 'vehicules';
    protected $fillable = [
        'vehicule',
        'immatriculation',
        'kilometrage',
        'model',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function taskSheets()
    {
        return $this->hasMany(Task_sheet::class);
    }

    public function carsMake()
    {
        return $this->belongsTo(CarsMake::class, 'vehicule')->withDefault();
    }
    public function carsModel()
    {
        return $this->belongsTo(CarsMake::class, 'model')->withDefault();
    }
}
