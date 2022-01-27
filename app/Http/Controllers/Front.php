<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Front extends Controller
{
    //
    public function default(){
        return view('Frontend.home');
    }
    public function contact(){
        return view('Frontend.contact');
    }
}
