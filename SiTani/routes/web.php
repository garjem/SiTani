<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\faqController;
use App\Http\Controllers\BelanjaController;

use App\Http\Controllers\artikelController;
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

Route::get('/Faq', [faqController::class, 'index'])->name('Faq');
Route::get('/FaqAdmin', [faqController::class, 'faqAdmin'])->name('FaqAdmin');
Route::post('/inputFaq', [faqController::class, 'create'])->name('inputFaq');
Route::get('/deleteFaq/{id}', [faqController::class, 'delete'])->name('deleteFaq');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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