<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;




// Route::get('phpinfo', function () {
//     phpinfo();
// });

// Route::get('/info', function() {
//     phpinfo();
// });

// Route::get('/home',[HomeController::class,'index'])->name('home.index');

// Route::view('upload','upload');
// Route::post('upload',[HomeController::class,'index']);

// Route::view('user','user');
// Route::view('about','about');
Route::view('/welcome', 'welcome');



// Route::get('/add-product', [ProductController::class,'addProducts']);
// Route::get('/search', [ProductController::class,'search']);
// Route::get('/autocomplete', [ProductController::class,'autocomplete'])->name('autocomplete');
// Route::resource('disciples','App\Http\Controllers\disciplesController');


Route::resource('tests', TestController::class);