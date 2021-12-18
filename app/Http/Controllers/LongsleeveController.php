<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LongsleeveController extends Controller
{
    public function longsleeveView(){
        return view('clients.longsleeve',[
            "title" => "Longsleeve"
        ]);
    }
}
