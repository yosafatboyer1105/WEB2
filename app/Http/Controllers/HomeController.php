<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class HomeController extends Controller
{
    public function redirect() // arahan login user dan admin
    {
        $level=Auth::user()->level;

        if($level=='1'){
            return view('admin.dasbor');
        }

        else{
            return view('clients.landing');
        }
    }

    public function index(){
        return view('welcome');
    }
}
