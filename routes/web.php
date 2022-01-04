<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\viewDetailController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;

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




Route::get('/add', function () {
    return view('add');
});
Route::middleware(['auth'])->group(function(){
    Route::middleware(['admin'])->group(function(){
        Route::get('/add', function () {
            return view('add');
        });
        Route::get('/show', [ProductController::class, 'index']);

        Route::post('/add', [ProductController::class, 'upload']);     
    });
});

Route::get('/homeAdmin', function () {
    return view('homeAdmin');
});

Route::get('/login', [LoginController::class, 'index']);


Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/viewDetail/{id}', [viewDetailController::class, 'index'])->name('home');
