<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'response',
        'reviewer_note',
        'status',
        'user_id',
        'team_id',
        'competition_id',
        'assignment_id',
    ];

    protected $appends = [
        'is_open',
    ];

    public function getIsOpenAttribute()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');

        return $this->assignment->due_date >= $now;
    }

    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
