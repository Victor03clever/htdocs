<?php

namespace App\controllers;

use App\models\Course;
use App\models\Instructor;

class HomeController
{
    public function __construct()
    {
        logged();
    }

    public function home()
    {
        $page = 'home';
        return view('layouts/app',compact('page'));
    }

    public function instructor()
    {
        $page = 'instructor';
        return view('layouts/app',compact('page'));
    }

    public function student()
    {
        $course = new Course();
        $tutor = new Instructor();
        $page = 'student';
        $courses = $course->all();
        $tutores = $tutor->all();
        return view('layouts/app',compact('page','courses','tutores'));
    }
}
