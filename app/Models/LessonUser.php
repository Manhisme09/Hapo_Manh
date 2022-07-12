<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LessonUser extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = [
        'user_id',
        'lesson_id'
    ];

    protected $fillable = [
        'lesson_id',
        'user_id',
    ];
}
