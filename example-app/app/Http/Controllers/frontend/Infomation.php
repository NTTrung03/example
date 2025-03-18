<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Infomation extends Controller{
    public function index(){
        return view('home.pages.infomation');
    }
}
