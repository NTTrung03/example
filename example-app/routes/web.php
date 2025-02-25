<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Checkage;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('front.index');
});










Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create'); 
Route::post('/users', [UserController::class, 'store'])->name('users.store'); 
Route::post('/users/{user}/update-role', [UserController::class, 'updateRole'])->name('users.updateRole');

Route::get('/checkage', function () {
    return view('checkage');
});

Route::post('/checkage', function (Request $request) {
    $request->merge(['age' => (int) $request->input('age')]);
    return response()->json(['message' => 'Bạn đã đủ tuổi.']);
})->middleware(Checkage::class)->name('checkage');