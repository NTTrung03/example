<?php   
namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class BlogDetailController extends Controller{
    public function index(){
        return view('home.pages.blog_detail');
    }
}