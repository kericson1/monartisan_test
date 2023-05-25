<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SinistreController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/test', function () {
    return view('test');
});

Route::post('/sinistre', [SinistreController::class, 'store']);
Route::post('/contact', [ContactController::class, 'store']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/sinistre', [AdminController::class, 'sinistre'])->middleware(['auth'])->name('sinistre');
Route::get('/dashboard/contact', [AdminController::class, 'contact'])->middleware(['auth'])->name('contact');

require __DIR__ . '/auth.php';
