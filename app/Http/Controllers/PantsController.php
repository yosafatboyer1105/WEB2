<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PantsController extends Controller
{
    public function pantsView(){
        return view('clients.pants',[
            "title" => "Pants"
        ]);
    }
}
