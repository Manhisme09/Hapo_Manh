<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseTeacher extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = [
        'user_id',
        'course_id'
    ];
    protected $fillable = [
        'course_id',
        'user_id',
        'teach_time',
    ];
}
