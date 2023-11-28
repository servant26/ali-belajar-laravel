<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartsController extends Controller
{
    public function pie(){
        return view('pages.charts.pie');
    }

    public function line(){
        return view('pages.charts.line');
    }
}
