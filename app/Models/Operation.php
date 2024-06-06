<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_sheet_id',
        'tps',
        'operations_realisees',
        'observations',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function taskSheet()
    {
        return $this->belongsTo(Task_sheet::class);
    }
}
