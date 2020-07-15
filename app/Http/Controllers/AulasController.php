<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AulasController extends Controller
{
    public function aulasPhp(){
        return view('site.aulasphp');
}

    public function aulasBanco(){
    return view('site.aulasbanco');
}

    public function aulasRedes(){
    return view('site.aulasredes');
}

    public function aulasSeguranca(){
    return view('site.aulasseguranca');
}

}
