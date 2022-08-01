<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'course_name',
        'image',
        'description',
        'time',
        'price',
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(User::class, 'course_teacher', 'course_id', 'user_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function scopeOther($query)
    {
        return $query->limit(config('amount.course_num_home'));
    }

    public function scopeMain($query)
    {
        return $query->orderBy('price', config('amount.sort_low_to_hight'))->limit(config('amount.course_num_home'));
    }

    public function getTotalLessonsAttribute()
    {
        return $this->lessons->count();
    }

    public function getTotalTimeAttribute()
    {
        return $this->lessons->sum('time');
    }

    public function getTotalLearnersAttribute()
    {
        return $this->users->count();
    }

    public function scopeSearch($query, $data)
    {
        if (isset($data['submit'])) {
            if (!empty($data['key_search'])) {
                $query->where(
                    'course_name',
                    'LIKE',
                    "%{$data['key_search']}%"
                )->orWhere('description', 'LIKE', "%{$data['key_search']}%");
            }

            if ($data['created_time'] == config('course.oldest')) {
                $query->orderBy('created_at', config('amount.sort_low_to_hight'));
            }

            if ($data['created_time'] == config('course.newest')) {
                $query->orderBy('created_at', config('amount.sort_hight_to_low'));
            }


            if (isset($data['tags'])) {
                $query->whereHas('tags', function ($query) use ($data) {
                    $query->whereIn('tag_id', $data['tags']);
                });
            }

            if (isset($data['teachers'])) {
                $query->whereHas('teachers', function ($query) use ($data) {
                    $query->whereIn('user_id', $data['teachers']);
                });
            }
            if (!empty($data['learners'])) {
                $query->withCount('users')->orderBy('users_count', $data['learners']);
            }

            if (!empty($data['lessons'])) {
                $query->withCount('lessons')->orderBy('lessons_count', $data['lessons']);
            }

            if (!empty($data['times'])) {
                $query->withSum('lessons', 'time')->orderBy('lessons_sum_time', $data['times']);
            }

            if (!empty($data['reviews'])) {
                $query->withCount('reviews')->orderBy('reviews_count', $data['reviews']);
            }
            return $query;
        }
    }
}
