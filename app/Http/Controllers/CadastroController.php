<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function cadastrar(Request $request){
        $request->validate([
            'nome' => 'required',
            'sobrenome' => 'required',
            'email' => 'required',
            'senha' => 'required',
            'repsenha' => 'required|same:senha'
        ]);
        return redirect()->route('site.home');
    }
}
