<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'email',
        'telephone',
        'vehicule_id',
        'task_id',
    ];

    protected $hidden = ['created_at', 'updated_at'];
    public function task()
    {
        return $this->belongsTo(Task::class)->withDefault();
    }

    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class)->withDefault();
    }
    public function taskSheets()
    {
        return $this->hasMany(Task_sheet::class);
    }
}
