<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\CouponController;





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
 
    Route::resource('home',DataController::class);
    Route::get('/', function(){
        return view('auth.login');
    });
    
    Route::get('/payment', function(){
        return view('payment.index');
    });
    
    Route::get('/cart', function(){
        return view('cart.index');
    });
    Route::get('/contact', function(){
        return view('contact.index');
    });
    Route::get('/product', function(){
        return view('product.index');
    });
     
    
    Route::resource('admin', AdminController::class);
    Route::resource('products', ProductController::class);
    Route::resource('categorys', CategoryController::class);
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('coupon', CouponController::class);

 









