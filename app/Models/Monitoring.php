<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    use HasFactory;

    protected $table = 'monitorings';
    protected $primaryKey = 'id';
    protected $fillable = [
        'temperature',
        'turbidity',
        'ph',
        'dissolved_oxygen',
        'kualitas_air',
    ];
}
