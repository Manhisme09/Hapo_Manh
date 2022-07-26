<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseUser;
use App\Models\User;
use Illuminate\Database\Seeder;

class CourseUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = Course::all();
        User::all()->each(function ($user) use ($courses) {
            $user->courses()->attach(
                $courses->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
