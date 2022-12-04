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

    public function edit($id){
        $empresa = Empresa::findOrFail($id);
        
        return view('empresa.update', ['empresa' => $empresa]);
    }
    public function update(Request $request){
        $empresa = Empresa::findOrFail($request->id)->update($request->all());
        return redirect('/')->with('msg','Empresa editada com sucesso!');
    }

    public function store(Request $request){
       
        $empresa['nome_empresa'] = $request->nome_empresa;
        $empresa['cep'] = $request->cep;
        $empresa['cidade'] = $request->cidade;
        $empresa['endereco'] = $request->endereco;
        $empresa['numero'] = $request->numero;
        $empresa['representante'] = $request->representante;
        $empresa['cargo'] = $request->cargo;
        $empresa['email'] = $request->email;
        $empresa['telefone'] = $request->telefone;
        $empresa['celular'] = $request->celular;
        $empresa['user'] = Auth::user()->id;
       

        // $empresa->nome_empresa = $request->nome_empresa;
        // $empresa->cep = $request->cep;
        // $empresa->cidade = $request->cidade;
        // $empresa->endereco = $request->endereco;
        // $empresa->numero = $request->numero;
        // $empresa->representante = $request->representante;
        // $empresa->cargo = $request->cargo;
        // $empresa->email = $request->email;
        // $empresa->telefone = $request->telefone;
        // $empresa->celular = $request->celular;
        // $empresa->user = Auth::user()->id;
        
        
        Auth::user()->empresa()->create($empresa);

        return redirect('/')->with('msg','Empresa cadastrada com sucesso!');
   }

}
