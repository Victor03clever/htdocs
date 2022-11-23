<?php

namespace App\controllers;

use App\models\Course;
use App\models\Instructor;
use App\models\Student;

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

    public function register()
    {
        $course = new Course();
        $tutor = new Instructor();
        $page = 'cadastrar';
        $courses = $course->all();
        $tutores = $tutor->all();
        return view('layouts/app',compact('page','courses','tutores'));
    }

    public function students()
    {
        $student = new Student();
        $page = 'students';
        $students = $student->getStudents();
        return view('layouts/app',compact('page','students'));
    }
}
