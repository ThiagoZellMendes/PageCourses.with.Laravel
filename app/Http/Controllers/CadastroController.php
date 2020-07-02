<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use App\User;
use CreateUsersTable;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function cadastrar(Request $request){
        
        $request->validate([

            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required',
            'repsenha' => 'required|same:senha'

        ]);

        
        ModelsUser::create($request -> except('_token', 'repsenha'));
        $request['senha'] = md5($request['senha']);
        return redirect()->route('site.home');
    }
}
