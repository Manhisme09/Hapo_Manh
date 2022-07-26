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

    // public static function getAllCourses()
    // {
    //     return Course::get();
    // }

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
}
