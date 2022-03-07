<?php

use Illuminate\Support\Facades\Route;
use App\Htpp\Controllers\PageController;
use App\Http\Controllers\fitur\AboutController as FiturAboutController;
use App\Http\Controllers\fitur\HomeController as FiturHomeController;
use App\Http\Controllers\fitur\NewsController;
use App\Http\Controllers\fitur\ProductController;
use App\Http\Controllers\fitur\ProgramController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
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

//PRAKTIKUM 1 
//Routing Web FrameWork Laravel
/*
// URL '/'
Route::get('/', function () { 
    return "Selamat Datang"; 
   });
 
// URL '/about/'
Route::get('/about', function () { 
    return "NIM : 2041720018, Nama : Dherisma Hanindita Utami, Kelas : TI 2H"; 
   }); 

// URL '/articles/{id}' 
Route::get('/articles/{id}', function ($id) { 
    echo "Ini adalah halaman artikel dengan ID: ".$id; 
   }); 
*/
\
/*
//PRAKTIKUM 2
//Controller Web Framework Laravel
Route::get('/',[PageController::class, 'index']);

Route::get('/about',[PageController::class, 'about']);

Route::get('/articles/{id}',[PageController::class, 'articles']);
*/

/*
//PRAKTIKUM 3
// Home
Route::get('/', [FiturHomeController::class, 'index']);

// Products
Route::prefix('/products')->group(function(){
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/detail/{id}', [ProductController::class, 'detail']);
}) ;

// News
    Route::controller(NewsController::class)->group(function(){
        Route::get('/news', 'index');
        Route::get('/news/detail/{slug}', 'detail');
    });

// Program
    Route::controller(ProgramController::class)->group(function(){
        Route::get('/program/karir', 'karir');
        Route::get('/program/magang', 'magang');
        Route::get('/program/kunjungan-industri', 'industri');
    });
Route::get('/about', [FiturAboutController::class, 'index'])->name('about');
*/

Route::get('/', function(){
    return view('index');
})->name('home');;

Route::get('about', function(){
    return view('about');
})->name('about');;

Route::get('rooms', function(){
    return view('rooms');
})->name('rooms');;

Route::get('gallery', function(){
    return view('gallery');
})->name('gallery');;

Route::get('dinning', function(){
    return view('dinning');
})->name('dinning');;

Route::get('news', function(){
    return view('news');
})->name('news');;