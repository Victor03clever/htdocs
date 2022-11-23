<?php

namespace App\controllers;

class PageAuth 
{
    public function __construct()
    {
        verifyAuth();
    }
    
    public function index()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
}