<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'quota',
        'description',
        'is_publish',
    ];

    protected $casts = [
        'is_publish' => 'bool'
    ];
}
