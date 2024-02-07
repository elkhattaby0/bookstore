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


Route::get('/', [HomeController::class, 'index'])
->name('home_page');
Route::get('/books', [BooksController::class, 'index'])
->name('books_page');

Route::get('book_nbr', [BooksController::class, 'details'])
->name('details_page');


Route::name('signup_page')
->controller(UserController::class)
->prefix('sginUp')
->group(function () {
    Route::get('/', 'create');
    Route::post('/', 'store');
});

Route::name('signin_page')
->controller(UserController::class)
->prefix('sginIn')
->group(function () {
    Route::get('/', 'show');
    Route::post('/', 'login');
});

Route::get('/logout', [UserController::class, 'logout'])
->name('dashborad.logout');

