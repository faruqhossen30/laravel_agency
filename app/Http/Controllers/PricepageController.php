<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricepageController extends Controller
{
    public function index(){
        return view('pricepage');
    }
}
