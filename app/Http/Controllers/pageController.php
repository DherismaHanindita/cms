<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index(){
        return 'Hi, Selamat Datang!';
    }

    public function about(){
        return 'Dherisma Hanindita Utami <br> 2041720018';
    }

    public function articles ($id){
        return 'ini adalah halaman dengan ID: '.$id;
    }
}
