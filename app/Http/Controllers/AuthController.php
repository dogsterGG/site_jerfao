<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(string $usermail, string $userpass)
    {
        echo 'Quem logou: '.$usermail.'<br>Digitou o que? R: '.$userpass;
    }
}
