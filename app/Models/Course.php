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
    public function lesson()
    {
        return $this->hasMany(Lesson::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
    public function review()
    {
        return $this->hasMany(Review::class);
    }
    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }
}
