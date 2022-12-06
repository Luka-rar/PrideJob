<?php

namespace App\Http\Controllers;

use App\Models\Vaga;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.vaga_create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vaga = new Vaga;
        
        $vaga->quantidade = $request->quantidade;
        $vaga->categoria = $request->categoria;
        $vaga->tipo_vaga = $request->tipo_vaga;
        $vaga->salario = $request->salario;
        $vaga->beneficio = $request->beneficio;
        $vaga->requisitos = $request->requisitos;
        $vaga->local = $request->local;
        $vaga->horario = $request->horario;
        $vaga->cidade = $request->cidade;
        $vaga->estado = $request->estado;

        $user = auth()->user();
        $vaga->user_id = $user->id;
        $vaga->nome_empresa = $user->empresa()->first()->nome_empresa;
        $vaga->save();

        return redirect('/empresas/dashboard')->with('msg','Vaga criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function show(Vaga $vaga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaga $vaga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaga $vaga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vaga::findOrFail($id)->delete();
        return redirect('/empresas/dashboard')->with('msg', 'Vaga com id: ' . $id . ' foi deletada com sucesso!');
    }
}
