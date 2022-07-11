<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name',
        'image',
        'email',
        'birthdate',
        'phone',
        'address',
        'about_me',
        'username',
        'password',
        'role',
    ];

    public function course()
    {
        return $this->belongsToMany(Course::class);
    }

    public function lesson()
    {
        return $this->belongsToMany(Lesson::class);
    }
    public function review()
    {
        return $this->hasMany(Review::class);
    }
}
