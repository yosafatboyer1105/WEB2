<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{
    public function redirect() // arahan login user dan admin
    {
        $level=Auth::user()->level;

        if($level=='1'){
            return view('admin.dasbor');
        }

        else{
            // taroh modul buat nampilin produk ke user page nya disini.
            return view('clients.landing');
        }
    }

    public function index(){ // method yang return view landing page
        return view('welcome');
    }

}
