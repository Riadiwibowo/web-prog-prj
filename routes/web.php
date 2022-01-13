<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
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
<<<<<<< HEAD
=======

>>>>>>> dd56aec3bab2d9ea165b6e45270ab9a7fbd6b40a
Auth::routes();
//route untuk guest
Route::get('/home', [HomeController::class, 'index'])->name('home');

//untuk member yang belum login
Route::get('/', [ViewController::class, 'index']);

//untuk member yang sudah login
Route::middleware(['auth'])->group(function(){

    //routes untuk update profile
    Route::get('/profile/{id}',[UserController::class, 'profile']);
    Route::get('/update/profile',[UserController::class, 'updateCheck']);
    Route::post('/update/profile', [UserController::class, 'update'])->name('profile.update');

    //routes untuk menampilkan cart ( increment item dan decrement item)
    Route::get('/cart/{id}', [CartController::class, 'showcart'])->name('cart.index');
    Route::post('/cart/{id}', [CartController::class, 'store'])->name('cart.store');
    Route::post('/cartdecre/{id}', [CartController::class, 'storedecre'])->name('cart.storedecre');

    //routes untuk checkout item yang ada di cart dengan membuat status transaksi menjadi 'paid'
    Route::get('/checkout', [CheckoutController::class, 'showcart']); 
    Route::post('/checkout/{id}', [CheckoutController::class, 'checkout']); 
    // Route::post('/checkout/{id}', [CartController::class, 'checkout'])->name('cart.checkout');
    // Route::post('/cart/{id}', [CartController::class, 'storeplus'])->name('cart.storerequest');
});

    
//untuk member yang sudah login dan memiliki role ('admin')
Route::middleware(['auth'])->group(function(){
    Route::middleware(['admin:admin'])->group(function(){
        Route::get('/add',[ProductController::class, 'index']);
        Route::post('/add', [ProductController::class, 'upload']);
        Route::get('/update/{id}',[ProductController::class, 'updateCheck']);
        Route::post('/update/{id}', [ProductController::class, 'update']);
        Route::post('/delete/{id}', [ProductController::class, 'delete']);
    });
});

//routes untuk view dan detail dari furnitures
<<<<<<< HEAD
Route::get('/furnitures', [ViewController::class, 'furnituresuser']);
Route::get('/furnitures/{id}', [ViewController::class, 'viewdetail']);     
Route::get('/transaction/{id}', [TransactionController::class, 'viewTransaction']);     
Route::post('/search', [ProductController::class, 'search']);
Route::get('/search', [ProductController::class, 'search']);
     
=======
Route::get('/furnitures', [ViewController::class, 'index1']);
Route::get('/furnitures/{id}', [viewDetailController::class, 'index']);    
Route::post('/search', [ProductController::class, 'search']);
Route::get('/search', [ProductController::class, 'search']);



>>>>>>> dd56aec3bab2d9ea165b6e45270ab9a7fbd6b40a







