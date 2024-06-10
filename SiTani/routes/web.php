<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\faqController;
use App\Http\Controllers\reviewController;

use App\Http\Controllers\artikelController;
use App\Http\Controllers\BelanjaController;
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
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/', function () {
    return view('landingPage.landingPage');
});

Route::get('/belanja',[BelanjaController::class,'index']);
Route::get('/Artikel',[artikelController::class,'index']);

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/belanja',[BelanjaController::class,'index']);

Auth::routes();
Route::get('/editProfile' , [\App\Http\Controllers\LandingController::class , 'editProfile'])->name('editProfile');
Route::put('/edit-profile', [\App\Http\Controllers\LandingController::class, 'updateProfile'])->name('profile.update');

Route::get('/Faq', [faqController::class, 'index'])->name('Faq');
Route::get('/FaqAdmin', [faqController::class, 'faqAdmin'])->name('FaqAdmin');
Route::post('/inputFaq', [faqController::class, 'create'])->name('inputFaq');
Route::get('/deleteFaq/{id}', [faqController::class, 'delete'])->name('deleteFaq');
Route::get('/review', [reviewController::class, 'viewReview'])->name('review');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/cart/add', [\App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
Route::get('/cart' , [\App\Http\Controllers\CartController::class , 'index'])->name('cart');
Route::get('/cartv2' , [\App\Http\Controllers\CartController::class , 'index'])->name('cartv2');
Route::put('/cart/{id}', [\App\Http\Controllers\CartController::class , 'updateQuantity'])->name('cart.update');
Route::delete('/cart/{id}', [\App\Http\Controllers\CartController::class , 'destroy'])->name('cart.destroy');
Route::post('order' , [\App\Http\Controllers\CartController::class , 'order'])->name('order');
Route::get('/order/list' , [\App\Http\Controllers\CartController::class , 'orderList'])->name('order.list');
Route::put('/order/list/{id}' , [\App\Http\Controllers\CartController::class , 'addReview'])->name('order.addReview');

Route::get('/dashboardadmin', function () {
    return view('admin.dashboard'); 
});
Route::get('/dashboardartikel', function () {
    return view('admin.dashboardartikel'); 
});
Route::get('/dashboardmitra', function () {
    return view('admin.dashboardmitra'); 
});
Route::get('/dashboardproduk', function () {
    return view('admin.dashboardproduk'); 
});
Route::get('/dashboardworkshop', function () {
    return view('admin.dashboardworkshop'); 
});

Route::get('/wishlist', function () {
    return view('wishlist'); 
});