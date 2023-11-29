<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BioController extends Controller
{
    //
    public function bio(){
        return view("pages.other.bio");
    }
}

