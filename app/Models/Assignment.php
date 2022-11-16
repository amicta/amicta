<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'due_date',
        'competition_id',
        'assign_registered',
    ];

    protected $casts = [
        'assign_registered' => 'bool',
    ];

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
}
