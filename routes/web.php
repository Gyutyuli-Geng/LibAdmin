<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureLogin;

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
    return Redirect::to("/login");
});



Route::resource('books','\App\Http\Controllers\BooksController')->middleware(EnsureLogin::class);
Route::resource('rents','\App\Http\Controllers\RentsController')->middleware(EnsureLogin::class);
Route::post('/rents/search','\App\Http\Controllers\RentsController@search')->middleware(EnsureLogin::class);
Route::resource('members','\App\Http\Controllers\MembersController')->middleware(EnsureLogin::class);
Route::post('/members/search','\App\Http\Controllers\MembersController@search')->middleware(EnsureLogin::class);
Route::post('/books/search','\App\Http\Controllers\BooksController@search')->middleware(EnsureLogin::class);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

Route::get('/register', function () {
    return Redirect::to("/login");
});