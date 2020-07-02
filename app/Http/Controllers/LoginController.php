<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{


    public function login(){
        return view('site.login');
    }
        
    
    
    public function logar(Request $request){
        $request->validate([
            'email' => 'required',
            'senha' => 'required'
        ]);
        $usuario = User::where('email', $request->email)
        ->where('senha', ($request->senha))->first();
        

        if($usuario != null){
        session(['nome'=> $usuario->nome]);
            
        return redirect()->route('site.cursos');
    }
        
        return redirect()->back()->with('erro', 'Login ou senha Incorreto');
    }

    public function logout(Request $request){
        $request -> session()->flush();
        return redirect('home');
    }
}