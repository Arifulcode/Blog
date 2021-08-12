<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;




Route::get('/', function () {

    return view('welcome');
});

Route::get('/front', function () {
    return view('frontend.layouts.frontend_master');
});

Route::get('/main', function () {
    return view('frontend.pages.home');
})->name('main');

Route::get('/about', function () {
    return view('frontend.pages.about');
});

Route::get('/category', function () {
    return view('frontend.pages.category');
});

Route::get('/contact', function () {
    return view('frontend.pages.contact');
});

Route::get('/post', function () {
    return view('frontend.pages.post');
});

//admin route listen
Route::get('/dashboard', function () {
    return view('backend.layouts.backend_master');
});

Route::get('/dashboard/index', function () {
    return view('backend.pages.index');
});

// Route::resource('/category', CategoryController::class)->except([
//     'create', 'store', 'update', 'destroy'
// ]);
Route::resource('category', CategoryController::class);
// Route::resource('tag', TagController::class);
Route::resource('tag', TagController::class);
Route::resource('post', PostController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

