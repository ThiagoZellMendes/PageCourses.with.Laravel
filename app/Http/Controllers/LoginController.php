<?php

namespace App\Http\Controllers;

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
        if($request->email == 'jackmon@gmail.com' && $request->senha == '147852'){
            session(['nome' => 'Jack-Mom']);
            return redirect()->route('site.cursos');
        }else{
            return redirect()->back()->with('erro', 'Login ou senha Incorreto');
        }
    }

    public function logout(Request $request){
        $request -> session()->flush();
        return redirect('home');
    }
}