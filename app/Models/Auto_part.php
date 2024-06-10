<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto_part extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'part_number',
        'description',
        'price',
        'stock_quantity',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function operations()
    {
        return $this->belongsToMany(Operation::class);
    }
}