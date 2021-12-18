<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // SEMENTARA, NANTI BAKAL DIBUATIN CONTROLLER NYA MASING MASING.
    public function mainView(){
        return view('clients.landing',[
            "title" => "Fashionista.Co"
        ]);
    }

    public function loginView(){
        return view('auth.login',[
            "title" => "Login"
        ]);
    }

    public function aboutView(){
        return view('clients.aboutus',[
            "title" => "Login"
        ]);
    }

}
