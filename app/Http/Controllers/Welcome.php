<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Welcome extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function index(){
        return view('index');
    }

    function aboutyogapath(){
        return view('about');
    }

    function yogaservice(){
        return view('service');
    }

    function yogaprice(){
        return view('price');
    }

    function yogaclass(){
        return view('class');
    }

    function yogateam(){
        return view('team');
    }

    function yogaportfolio(){
        return view('portfolio');
    }

    function yogablog(){
        return view('blog');
    }

    function yogasingle(){
        return view('single');
    }

    function yogacontact(){
        return view('contact');
    }

    
}
