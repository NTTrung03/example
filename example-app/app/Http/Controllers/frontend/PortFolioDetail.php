<?php   
namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class PortFolioDetail extends Controller{
    public function index(){
        return view('home.pages.portfolio_detail');
    }
}