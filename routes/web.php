<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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


Route::get('/', [HomeController::class, 'index'])->name('home_page');
Route::get('/books', [BooksController::class, 'index'])->name('books_page');

Route::get('/sginUp', [UserController::class, 'create'])
->name('signup_page');
Route::post('/sginUp', [UserController::class, 'store'])
->name('signup_page');

Route::get('/sginIn', [UserController::class, 'show'])
->name('signin_page');
Route::post('/sginIn', [UserController::class, 'login'])
->name('signin_page');