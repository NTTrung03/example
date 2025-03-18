<?php
namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class PortfolioController extends Controller{
    public function index(){
        return view('home.pages.portfolio');
    }
}