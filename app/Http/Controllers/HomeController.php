<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaga;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {       
        return view('homepage');
    }

    public function painelVagas()
    {
        $vagas = Vaga::all();
       
        return view('painel_vagas', ['vagas' => $vagas]);
    }
}
