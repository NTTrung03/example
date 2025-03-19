<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\frontend\Infomation;
use App\Http\Controllers\frontend\Mission;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Checkage;
use Illuminate\Http\Request;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\frontend\PortfolioController;
use App\Http\Controllers\frontend\TeamController;
use App\Http\Controllers\frontend\BlogDetailController;
use App\Http\Controllers\frontend\PortFolioDetail;
use App\Http\Controllers\admin\PageController;
// Home
Route::get('/', [HomeController::class, 'index'])->name('home');
// Admin
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Frontend
// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blogs.index');
// Portfolio
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
// Team
Route::get('/team', [TeamController::class, 'index'])->name('team.index');
// Blog Detail
Route::get('/blog_detail', [BlogDetailController::class, 'index'])->name('blog_detail.index');
// Portfolio Detail
Route::get('/Details_p1', [PortFolioDetail::class, 'index'])->name('portfolio_detail.index');
// page
Route::get('/pages', [PageController::class, 'index'])->name('admin.pages.index');
Route::get('/admin/pages/create', [PageController::class, 'create'])->name('admin.pages.create');
Route::get('/admin/pages/edit/{page}', [PageController::class, 'edit'])->name('admin.pages.edit');
Route::post('/admin/pages/store', [PageController::class, 'store'])->name('admin.pages.store');
Route::put('/admin/pages/update/{page}', [PageController::class, 'update'])->name('admin.pages.update');
Route::delete('/admin/pages/destroy/{page}', [PageController::class, 'destroy'])->name('admin.pages.destroy');


//mission
Route::get('/mission', [Mission::class, 'index'])->name('mission.index');
// Information
Route::get('/information', [Infomation::class, 'index'])->name('infomation.index');
// Authencation
Route::get('/login', [AuthController::class, 'showlogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
// Register
Route::get('/register', [AuthController::class, 'showregister'])->name('register');
// Forgot
Route::get('/forgot', [AuthController::class, 'forgotpassword'])->name('forgot');

//logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
//admin dashboard
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return "admin dashboard"; 
    })->name('admin.dashboard');
});
//user  dashboard
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', function () {
        return "User Dashboard";
    })->name('user.dashboard');
});
