<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index(){
        $users = User::all();

        return view('homepage', ['users' => $users]);
    }

    public function create(){
        return view('user.create');

    }
   public function store(Request $request){
     $user = new User; 
     $user->nome= $request->nome;
     $user->email= $request->email;
     $user->senha= $request->senha;
     $user->endereco= $request->endereco;
     $user->complemento= $request->complemento;
     $user->cidade= $request->cidade;
     $user->estado= "teste";
     $user->cep= $request->cep;
    
     $user->save();
     return redirect('/');
   }
}
