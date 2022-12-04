<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class EmpresaController extends Controller
{
    public function index(){
        $empresas = Empresa::all();

        return view('homepage');
    }

    public function create(){
        return view('empresa.create');

    }

    public function store(Request $request){
        $empresa = new Empresa;

        $empresa->nome_empresa = $request->nome_empresa;
        $empresa->cep = $request->cep;
        $empresa->cidade = $request->cidade;
        $empresa->endereco = $request->endereco;
        $empresa->numero = $request->numero;
        $empresa->representante = $request->representante;
        $empresa->cargo = $request->cargo;
        $empresa->email = $request->email;
        $empresa->telefone = $request->telefone;
        $empresa->celular = $request->celular;

        $empresa->save();

        return redirect('/')->with('msg','Empresa cadastrada com sucesso!');
   }

}
