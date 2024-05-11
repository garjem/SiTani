<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/faq', function () {
    return view('Faq'); 
});

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
Route::get('/dashboardwoekshop', function () {
    return view('admin.dashboardworkshop'); 
});