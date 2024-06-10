<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $table = 'vehicules';
    protected $fillable = [
        'num_matricule',
        'marque',
        'client_id',
        'kilometrage',
        'model_id',
        'makes_id'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function taskSheets()
    {
        return $this->hasMany(Task_sheet::class);
    }

    public function carMake()
    {
        return $this->belongsTo(CarsMake::class, 'makes_id');
    }
    public function carModel()
    {
        return $this->belongsTo(CarsModel::class, 'model_id');
    }
}