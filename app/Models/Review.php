<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'content',
        'star',
        'posted_at',
        'lesson_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function scopeRecentReview($query)
    {
        return $query->orderBy('posted_at', config('amount.sort_hight_to_low'))->limit(config('amount.review_num_home'))->get();
    }
}
