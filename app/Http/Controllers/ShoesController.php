<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoesController extends Controller
{
    public function shoesView(){
        return view('clients.shoe',[
            "title" => "Shoes"
        ]);
    }
}
