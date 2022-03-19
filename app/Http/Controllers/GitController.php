<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GitController extends Controller
{
    public function index()
    {
        return view('web.app');
    }
    public function login()
    {
        return view('web.login_web');
    }
}