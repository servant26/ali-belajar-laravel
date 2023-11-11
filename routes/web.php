<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\CrudController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//route home
Route::get('/', [HelloController::class, 'index']);

//route materi
Route::get('/programming_web', [HelloController::class, 'programming_web']);
Route::get('/programming_language', [HelloController::class, 'programming_language']);

//route crud
Route::get('/crud', [CrudController::class, 'index']);
Route::get('/crud/tambah', [CrudController::class, 'tambah']);
Route::post('/crud/add', [CrudController::class, 'add']);
Route::get('/crud/hapus/{id}', [CrudController::class, 'hapus']);
Route::get('/crud/edit/{id}', [CrudController::class, 'edit']);
Route::post('/crud/update', [CrudController::class, 'update']);

//route search
Route::get('/crud/cari',[CrudController::class, 'cari']);


