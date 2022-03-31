<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perjalanan;

class HomeController extends Controller
{
    public function index(){
        $hitungPerjalanan = \App\Perjalanan::count();
        $hitungUser = \App\User::count();
        return view('home', compact('hitungPerjalanan','hitungUser'));
    }    
}
