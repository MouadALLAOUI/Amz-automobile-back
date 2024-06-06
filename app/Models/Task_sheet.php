<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task_sheet extends Model
{
    use HasFactory;

    protected $fillable = [
        'num_matricule',
        'vehicule_id',
        'client_id',
        'entree',
        'sortie',
        'info',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function operations()
    {
        return $this->hasMany(Operation::class);
    }
}
