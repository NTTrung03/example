<?
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\Admin\PostController;

Route::middleware(['auth'])->prefix(
    'admin')->name('admin.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        // Route::resource('pages', PageController::class);
        // Route::resource('posts', PostController::class);
    }
);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');