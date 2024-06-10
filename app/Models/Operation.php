<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'tps',
        'operations_realisees',
        'observations',
        'task_sheet_id',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function taskSheet()
    {
        return $this->belongsTo(Task_sheet::class);
    }

    public function autoParts()
    {
        return $this->belongsToMany(Auto_part::class);
    }
}