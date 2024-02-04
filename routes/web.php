<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignupController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'components.navbar');

Route::get('/', function () {
    return view('components.navbar');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/books', [BooksController::class, 'index']);
Route::get('/sginUp', [SignupController::class, 'index']);