<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'telephone',
    ];

    protected $hidden = ['created_at', 'updated_at'];
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function vehicules()
    {
        return $this->hasMany(Vehicule::class);
    }
}