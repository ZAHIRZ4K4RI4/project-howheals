<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function logout(){
        FacadesAuth::logout();
            return Redirect()->route('login');
    }
}
