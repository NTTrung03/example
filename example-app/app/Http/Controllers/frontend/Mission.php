<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Mission extends Controller
{
    public function index(){
        return view('home.pages.mission');
    }
}
