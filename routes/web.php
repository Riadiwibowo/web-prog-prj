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

Route::middleware(['auth'])->group(function(){
    Route::middleware(['admin:1'])->group(function(){
        Route::get('/add', function () {
            return view('add');
        });
        Route::get('/update/{id}',[ProductController::class, 'updateCheck']);
        Route::post('/add', [ProductController::class, 'upload']);
        Route::post('/update/{id}', [ProductController::class, 'update']);
        // Route::get('/admin', function () {
        //     return view('admin');
        // });
    });
});

Route::get('/viewDetail/{id}', [viewDetailController::class, 'index'])->name('home');     

Route::get('/login', [LoginController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/home', [HomeController::class, 'index2'])->name('home');

