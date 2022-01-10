<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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




Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


//untuk member yang belum login
Route::get('/', [ViewController::class, 'index']);

//untuk member yang sudah login
Route::middleware(['auth'])->group(function(){
    // Route::get('/profile/{name}',[HomeController::class, 'profile']);
    Route::get('/profile/{id}',[UserController::class, 'profile']);
    Route::get('/update/profile',[UserController::class, 'updateCheck']);
    Route::post('/update/profile', [UserController::class, 'update'])->name('profile.update');
});
    
    
//untuk member yang sudah login dan memiliki role ('admin')
Route::middleware(['auth'])->group(function(){
    Route::middleware(['admin:admin'])->group(function(){
        Route::get('/add',[ProductController::class, 'index']);
        Route::get('/update/{id}',[ProductController::class, 'updateCheck']);
        Route::post('/add', [ProductController::class, 'upload']);
        Route::post('/update/{id}', [ProductController::class, 'update']);
        Route::post('/delete/{id}', [ProductController::class, 'delete']);
    });
});

//routes untuk view dan detail dari furnitures
Route::get('/furnitures', [ViewController::class, 'index1']);
Route::get('/furnitures/{id}', [viewDetailController::class, 'index']);     






