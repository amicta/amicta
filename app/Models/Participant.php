<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nim',
        'email',
        'phone',
        'program_study',
        'reference',
        'event_id',
    ];

    public function setReferenceAttribute($value)
    {
        $this->attributes['reference'] = json_encode($value);
    }

    public function getReferenceAttribute($value)
    {
        return $this->attributes['reference'] = json_decode($value);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
