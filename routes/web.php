<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ViewController;

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
    return view('welcome');
});
Route::get('/', [ViewController::class, 'index']);

Route::get('/viewFurniture', [ViewController::class, 'index1']);


Route::get('/register', function () {
    return view('register');
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/show', [ProductController::class, 'index']);

Route::post('/add', [ProductController::class, 'upload']);

Route::get('/homeAdmin', function () {
    return view('homeAdmin');
});
Route::get('/login', [LoginController::class, 'index']);

