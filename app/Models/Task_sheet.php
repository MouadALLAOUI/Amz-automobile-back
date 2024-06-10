<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task_sheet extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id',
        'entree',
        'sortie',
        'details',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function operations()
    {
        return $this->hasMany(Operation::class);
    }
}