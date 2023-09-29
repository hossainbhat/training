<?php

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


Route::namespace('App\Http\Controllers\Frontend')->group(function () {

Route::get('/','IndexControllert@Index')->name('index');
Route::get('/about','IndexControllert@About')->name('about');

});
