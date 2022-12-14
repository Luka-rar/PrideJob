<?php

namespace App\Http\Controllers;

use App\Models\Vaga;
use App\Models\Candidato;
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
        $vaga->user_id = $user->empresa()->first()->id;
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
    public function edit($id)
    {
        $vaga = new Vaga;
        $vaga = Vaga::findOrFail($id);
        return view('empresa.vaga_update', ['vaga' => $vaga]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $vaga = Vaga::findOrFail($request->id)->update($request->all());
        return redirect('/empresas/dashboard')->with('msg','Vaga editada com sucesso!');
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

    public function joinVaga($id){
        $candidato = auth()->user()->candidato()->first();

        $vaga = Vaga::findOrFail($id);

        $results = $vaga->candidatos()->get();
        $aux = null;
    
        foreach($results as $result){
            if($result->id == $candidato->id){ 
                $aux = $result;
            }
        }

        if($aux == null){
            $candidato->vagas()->attach([
                $id => ['status' => 2]
            ]);
            return redirect('/vagas/painel')->with('msg', 'Sua inscrição está confirmada na vaga' . $vaga->id);
        } else{
            dd('já inscrito!');
        }   
    }

    public function listCandidatos($id){
        $vaga = Vaga::findOrFail($id);
        $inscritos = $vaga->candidatos()->get();
        return view('empresa.candidato_vaga', ['inscritos' => $inscritos, 'vaga' => $vaga]);
    }

    public function verCandidato($id, $vaga){
        $candidato = Candidato::findOrFail($id);
        $vaga = Vaga::findOrFail($vaga);
        return view('empresa.candidato_inscrito', ['candidato' => $candidato, 'vaga' => $vaga]);
    }
    public function mudarStatusInscricaoEfetuar($candidato, $vaga){
        $candidato = Candidato::findOrFail($candidato);
        $id_vaga = Vaga::findOrFail($vaga);
        $status = null;

        foreach($candidato->vagas as $vaga){
            if($vaga->pivot->vaga_id == $id_vaga->id){
                $status = $vaga->pivot->status;
            }
        }

        if($status == 0){

            return redirect('/vagas/list/candidatos/' . $id_vaga->id)->with('mg3','Inscrição já foi cancelada!');

        } else if($status == 1){

            return redirect('/vagas/list/candidatos/' . $id_vaga->id)->with('mg3','Candidato já foi efetuado nessa inscrição de vaga!');
        } else{

            if($id_vaga->quantidade > 0){

                $candidato->vagas()->updateExistingPivot($id_vaga->id,
                ['status' => 1]);

                $quantidade = $id_vaga->quantidade - 1;

                $vagaAlterada = Vaga::where(['id' => $id_vaga->id])->update(['quantidade' => $quantidade]);

                return redirect('/vagas/list/candidatos/' . $id_vaga->id)->with('msg','Inscrição de candidato ID = ' . $candidato->id . ' foi efetuada com sucesso!');
                
            }else{
                return redirect('/vagas/list/candidatos/' . $id_vaga->id)->with('mg4','Quantidade de vagas já atingiu o limite!');
            }
        }
    }
    public function mudarStatusInscricaoFinalizar($candidato, $vaga){
        $candidato = Candidato::findOrFail($candidato);
        $id_vaga = Vaga::findOrFail($vaga);
        $status = null;

        foreach($candidato->vagas as $vaga){
            if($vaga->pivot->vaga_id == $id_vaga->id){
                $status = $vaga->pivot->status;
            }
        }
        
        if($status == 0){
            return redirect('/vagas/list/candidatos/' . $id_vaga->id)->with('mg3','Inscrição já foi cancelada!');

        } else{
            $candidato->vagas()->updateExistingPivot($id_vaga->id,
                ['status' => 0]);

            return redirect('/vagas/list/candidatos/' . $id_vaga->id)->with('mg','Inscrição de candidato ID = ' . $candidato->id . ' foi finalizada com sucesso!');
        }
    }
}
