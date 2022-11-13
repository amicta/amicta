<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Competition extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'type',
        'is_open',
        'is_publish',
    ];

    protected $casts = [
        'is_open' => 'bool',
        'is_publish' => 'bool',
        'is_registered' => 'bool',
    ];

    protected $appends = [
        'is_registered',
    ];

    public function getIsRegisteredAttribute()
    {
        return Auth::user()->competitions()->where('competition_id', $this->id)->count() == 1;
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'competition_user');
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
