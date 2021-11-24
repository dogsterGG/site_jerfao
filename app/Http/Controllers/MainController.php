<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function principal(){
        return view('site.principal');
    }

    public function teste(){
        return view('site.teste');
    }
}
