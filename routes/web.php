<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BioController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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
//route home
// Route::get('/', [HelloController::class, 'index']);

// //route materi
// Route::get('/programming_web', [HelloController::class, 'programming_web']);
// Route::get('/programming_language', [HelloController::class, 'programming_language']);


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Route CRUD
        Route::prefix('crud')->group(function () {
        Route::get('/', [CrudController::class, 'index']);
        Route::get('/tambah', [CrudController::class, 'tambah']);
        Route::post('/add', [CrudController::class, 'add']);
        Route::get('/hapus/{id}', [CrudController::class, 'hapus']);
        Route::get('/edit/{id}', [CrudController::class, 'edit']);
        Route::put('/update/{id}', [CrudController::class, 'update']);
        Route::get('/cari', [CrudController::class, 'cari']);
    });

    Route::get('/bio', [BioController::class, 'bio']);

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoriesController::class, 'index']);
        Route::get('/tambah', [CategoriesController::class, 'tambah']);
        Route::post('/add', [CategoriesController::class, 'add']);
        Route::get('/hapus/{id}', [CategoriesController::class, 'hapus']);
        Route::get('/edit/{id}', [CategoriesController::class, 'edit']);
        Route::put('/update/{id}', [CategoriesController::class, 'update']);
        Route::get('/cari', [CategoriesController::class, 'cari']);
    });

    Route::prefix('user')->group(function () {
        Route::get('/', [UsersController::class, 'user']);
        Route::get('/cariuser', [UsersController::class, 'cariuser']);
    });

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
