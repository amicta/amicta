<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $casts = [
        'assign_registered' => 'bool',
    ];

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }
}
