<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;


Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/gallery', function () {
    return view('gallery');
});

//Route::get('/contact', [ContactController::class, 'index']);
//Route::post('/contact', [ContactController::class, 'store']); 


///Route::get('/', function () {
   // return view('welcome');
//});
//use App\Http\Controllers\AdminController;

//Route::get('/admin', [AdminController::class, 'create'])->name('admin.create');
//Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');


// untuk tampilkan form
//Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// untuk proses simpan form (POST)
//Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
