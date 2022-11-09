<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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
        'is_publish' => 'bool',
        'is_available' => 'bool',
    ];

    protected $appends = [
        'current_participant',
        'is_available',
    ];

    public function getCurrentParticipantAttribute()
    {
        return $this->participants->count();
    }

    public function getIsAvailableAttribute()
    {
        return $this->participants->count() < $this->quota;
    }

    public function participants()
    {
        return $this->hasMany(Participant::class);
    }
}
