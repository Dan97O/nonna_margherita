<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function shop()
    {
        return view('shop');
    }
    public function blog()
    {
        return view('blog');
    }
}
