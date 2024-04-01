<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogComtroller extends Controller
{
    public function index(){
        return view('articles');
    }
}
