<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GitController extends Controller
{
    public function index()
    {
        return view('web.index');
    }
    public function login()
    {
        return view('web.login_web');
    }
    public function card()
    {
        return view('web.shopping-card');
    }
    public function hotro()
    {
        return view('web.hotrokh');
    }
    public function news()
    {
        return view('web.news');
    }
}