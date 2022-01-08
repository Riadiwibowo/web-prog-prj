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



Route::get('/', [ViewController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/furnitures', [ViewController::class, 'index1']);

Route::get('/furnitures/{id}', [viewDetailController::class, 'index']);     

Route::middleware(['auth'])->group(function(){
    Route::middleware(['admin:1'])->group(function(){
        Route::get('/add', function () {
            return view('add');
        });

        Route::post('/add', [ProductController::class, 'upload']);

        Route::get('/update/{id}',[ProductController::class, 'updateCheck']);

        Route::post('/update/{id}', [ProductController::class, 'update']);

        Route::post('/delete/{id}', [ProductController::class, 'delete']);

        Route::get('', [viewDetailController::class, 'previous']);     
    });
});





