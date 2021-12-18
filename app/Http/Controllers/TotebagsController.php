<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TotebagsController extends Controller
{
    public function totebagsView(){
        return view('clients.totebags',[
            "title" => "Totebags"
        ]);
    }
}
