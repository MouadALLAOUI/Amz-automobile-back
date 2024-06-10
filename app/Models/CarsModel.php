<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsModel extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'series', 'cars_make_id'];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function make()
    {
        return $this->belongsTo(CarsMake::class);
    }
}