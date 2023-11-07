<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index(){
        return view("hello");
    }

    public function programming_web(){
        return view("programming_web");
    }

    public function programming_language(){
        return view("programming_language");
    }
}
