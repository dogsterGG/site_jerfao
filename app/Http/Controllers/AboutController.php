<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function sobrenos(){
        return view('site.sobrenos');
    }
}
