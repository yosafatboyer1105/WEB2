<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ShirtsController extends Controller
{
    public function shirtView(){
        return view('clients.shirt',[
            "title" => "Shirts"
        ]);
    }
}
