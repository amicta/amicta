<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'product',
        'description',
        'member',
        'leader_id',
        'competition_id',
        'category_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'leader_id');
    }

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
