<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/front', function () {
    return view('frontend.layouts.frontend_master');
});

Route::get('/main' , function () {

    return view('frontend.pages.home');
});

Route::get('/about' , function () {

    return view('frontend.pages.about');
});

Route::get('/category' , function () {

    return view('frontend.pages.category');
});
Route::get('/contact' , function () {

    return view('frontend.pages.contact');
});
Route::get('/post' , function () {

    return view('frontend.pages.post');
});

//admin route listen
Route::get('/dashboard',function () {
    return view('backend.layouts.backend_master');
});
Route::get('/dashboard/index',function () {
    return view('backend.pages.index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
