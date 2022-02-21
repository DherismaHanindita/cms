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

//PRAKTIKUM 1 
//Routing Web FrameWork Laravel

// URL '/'
Route::get('/', function () { 
    return "Selamat Datang"; 
   });
 
// URL '/about/'
Route::get('/about', function () { 
    return "NIM : 2041720018, 
    Nama : Dherisma Hanindita Utami, 
    Kelas : TI 2H"; 
   }); 

// URL '/articles/{id}'
Route::get('/articles/{id}', function ($id) { 
    echo "Ini adalah halaman artikel dengan ID: ".$id; 
   }); 