<?php
namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class HomeController extends Controller{
    public function index(){
        return view('home.pages.home');
    }
}