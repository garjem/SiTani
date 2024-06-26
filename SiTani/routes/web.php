<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\faqController;
use App\Http\Controllers\ChatController;

use App\Http\Controllers\reviewController;
use App\Http\Controllers\artikelController;
use App\Http\Controllers\BelanjaController;

use App\Http\Controllers\ContactController;

use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailProdukController;



Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/', function () {
    return view('landingPage.landingPage');
});


Route::get('/belanja',[BelanjaController::class,'index']);
Route::get('/Artikel',[artikelController::class,'index']);
Route::get('/workshop',[WorkshopController::class,'index']);
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/detailarticle/{id}', [artikelController::class, 'show']);
Route::get('/detailworkshop/{id}', [WorkshopController::class, 'show']);

Auth::routes();
Route::get('/editProfile' , [\App\Http\Controllers\LandingController::class , 'editProfile'])->name('editProfile');
Route::put('/edit-profile', [\App\Http\Controllers\LandingController::class, 'updateProfile'])->name('profile.update');

Route::get('/Faq', [faqController::class, 'index'])->name('Faq');
Route::get('/FaqAdmin', [faqController::class, 'faqAdmin'])->name('FaqAdmin');
Route::post('/inputFaq', [faqController::class, 'create'])->name('inputFaq');
Route::get('/deleteFaq/{id}', [faqController::class, 'delete'])->name('deleteFaq');
// Route::get('/review', [reviewController::class, 'viewReview'])->name('review');
Route::get('/review/{id}', [ReviewController::class, 'show']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/detailproduk/{id}', [DetailProdukController::class, 'show'])->name('detailproduk.show');

Route::post('/cart/add', [\App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
Route::get('/cart' , [\App\Http\Controllers\CartController::class , 'index'])->name('cart');
Route::get('/cartv2' , [\App\Http\Controllers\CartController::class , 'index'])->name('cartv2');
Route::put('/cart/{id}', [\App\Http\Controllers\CartController::class , 'updateQuantity'])->name('cart.update');
Route::delete('/cart/{id}', [\App\Http\Controllers\CartController::class , 'destroy'])->name('cart.destroy');
Route::post('order' , [\App\Http\Controllers\CartController::class , 'order'])->name('order');
Route::get('/order/list' , [\App\Http\Controllers\CartController::class , 'orderList'])->name('order.list');
Route::put('/order/list/{id}' , [\App\Http\Controllers\CartController::class , 'addReview'])->name('order.addReview');


Route::prefix('admin')->middleware('admin')->group(function (){
    Route::get('/dashboard' , [ \App\Http\Controllers\AdminController::class , 'index'])->name('admin.index');
    Route::get('/orderlist', [\App\Http\Controllers\AdminController::class , 'orderList'])->name('admin.orderList');
    Route::put('/orders/cancel/{id}', [\App\Http\Controllers\AdminController::class, 'cancelOrder'])->name('orders.cancel');
    Route::put('/orders/send/{id}', [\App\Http\Controllers\AdminController::class, 'sendOrder'])->name('orders.send');
});


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

Route::get('/dashboardadmin',[DashboardController::class,'index']);
Route::get('/dashboardartikel',[DashboardController::class,'index1']);
Route::get('/dashboardmitra', [DashboardController::class,'index2']);
Route::get('/dashboardproduk', [DashboardController::class,'index3']);
Route::get('/dashboardworkshop', [DashboardController::class,'index4']);

Route::get('/wishlist', function () {
    return view('wishlist'); 
});
