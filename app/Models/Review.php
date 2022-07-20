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

    public function getReview()
    {
        $reviews = Review::join('users', 'users.id', '=', 'reviews.user_id')
            ->join('courses', 'courses.id', '=', 'reviews.course_id')
            ->get(['users.name', 'reviews.content', 'reviews.star', 'courses.course_name']);
        return $reviews;
    }
}
