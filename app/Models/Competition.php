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
        // if($this->type == 'fungame'){
        //     return Auth::user()->competitions()->where('competition_id', $this->id)->count() >= 2;
        // }
        return Auth::user()->competitions()->where('competition_id', $this->id)->count() == 1;
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function user_categories()
    {
        return $this->belongsToMany(Category::class, 'user_competition_category');
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_competition_category');
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
