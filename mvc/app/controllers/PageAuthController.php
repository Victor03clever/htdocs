<?php

namespace App\controllers;

class PageAuthController 
{
    public function __construct()
    {
    }
    
    public function index()
    {
        verifyAuth(BASE_URL,false);
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
}