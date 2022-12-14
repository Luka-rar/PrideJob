<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidatoController extends Controller
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

    
    public function create()
    {
        $user = Auth::user();
        return view('candidato.create', ['user' => $user]);
    }

    public function dashboard(){
        $candidato = auth()->user()->candidato()->first();
        $vagas = $candidato->vagas;

        return view('candidato.dashboard', ['vagas' => $vagas]);
    }
    
    public function store(Request $request)
    {
        $candidato['nome_completo'] = $request->nome_completo;
        $candidato['cpf'] = $request->cpf;
        $candidato['rg'] = $request->rg;
        $candidato['uf_rg'] = $request->uf_rg;
        $candidato['orgao_emissor'] = $request->orgao_emissor;
        $candidato['data_emissao'] = $request->data_emissao;
        $candidato['genero'] = $request->genero;
        $candidato['etnia'] = $request->etnia;
        $candidato['data_nascimento'] = $request->data_nascimento;
        $candidato['uf_nascimento'] = $request->uf_nascimento;
        $candidato['estado_civil'] = $request->estado_civil;
        $candidato['nome_mae'] = $request->nome_mae;
        $candidato['nome_pai'] = $request->nome_pai;
        $candidato['celular'] = $request->celular;
        $candidato['telefone'] = $request->telefone;
        $candidato['email'] = $request->email;
        $candidato['cep'] = $request->cep;
        $candidato['logradouro'] = $request->logradouro;
        $candidato['numero'] = $request->numero;
        $candidato['complemento'] = $request->complemento;
        $candidato['bairro'] = $request->bairro;
        $candidato['estado'] = $request->estado;
        $candidato['user'] = Auth::user()->id;
        
        //doc upload
        if($request->hasfile('curriculo') && $request->file('curriculo')->isValid()){

            $requestDoc = $request->curriculo;

            $extension = $requestDoc->extension();


            $docName = md5($requestDoc->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestDoc->move(public_path('images/curriculos'), $docName);

            $candidato['curriculo'] = $docName;
        }
        Auth::user()->candidato()->create($candidato);

        return redirect('/')->with('msg','Candidato cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function show(Candidato $candidato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('candidato.update');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $candidatoAlterado = Candidato::findOrFail($request->id)->update($request->all());
        $candidato = Candidato::findOrFail($request->id);
        //doc upload
        if($request->hasfile('curriculo') && $request->file('curriculo')->isValid()){

            $requestDoc = $request->curriculo;

            $extension = $requestDoc->extension();


            $docName = md5($requestDoc->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestDoc->move(public_path('images/curriculos'), $docName);

            $candidato['curriculo'] = $docName;
        }

        $candidato->update([
            'curriculo' => $candidato['curriculo']
        ]);

        

        return redirect('/')->with('msg','Candidato editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidato $candidato)
    {
        //
    }
    public function updatePivo($id){
        $candidato = auth()->user()->candidato()->first();
        $status = null;
        foreach($candidato->vagas as $vaga){
            if($vaga->pivot->vaga_id == $id){
                $status = $vaga->pivot->status;
            }
        }
        if($status == 0){
            return redirect('/candidatos/dashboard')->with('mg3','Vaga #' . $id . ' já foi cancelada!');
        } else{
            $candidato->vagas()->updateExistingPivot($id,
            ['status' => 0]);
            return redirect('/candidatos/dashboard')->with('mg','Vaga #' . $id . ' foi cancelada com sucesso!');
        }
    }
}
