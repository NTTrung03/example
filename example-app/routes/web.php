<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Checkage;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('Home.index');
});

Route::get('/portfolio', function (){
    return view('portfolio.index');
});

Route::get('/blog', function(){
    return view('blog.index');
});

Route::get('/Details_p1', function(){
    return view('portfolio.components.detail');
});


Route::get('/contact', function(){
    return view('contact.index');
} );

Route::get('/team', function () {
    return view('team.index');
});



// Route::get('/users', [UserController::class, 'index'])->name('users.index');
// Route::get('/users/create', [UserController::class, 'create'])->name('users.create'); 
// Route::post('/users', [UserController::class, 'store'])->name('users.store'); 
// Route::post('/users/{user}/update-role', [UserController::class, 'updateRole'])->name('users.updateRole');

// Route::get('/checkage', function () {
//     return view('checkage');
// });

// Route::post('/checkage', function (Request $request) {
//     $request->merge(['age' => (int) $request->input('age')]);
//     return response()->json(['message' => 'Bạn đã đủ tuổi.']);
// })->middleware(Checkage::class)->name('checkage');