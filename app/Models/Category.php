<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'competition_id',
        'is_publish',
    ];

    protected $casts = [
        'is_publish' => 'bool',
    ];

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }
}
