<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Empresa;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
     $user->name= $request->name;
     $user->email= $request->email;
     $user->password= $request->password;
     $user->endereco= $request->endereco;
     $user->complemento= $request->complemento;
     $user->cidade= $request->cidade;
     $user->estado= "teste";
     $user->cep= $request->cep;
    
     $user->save();
     return redirect('/');
   }

   public function login()
    {
        // $usuario = new User;
        // $usuario->name = "Jean Carlos";
        // $usuario->email = "jeancarloscharao@gmail.com";
        // $usuario->password = Hash::make("12345678");
        // $usuario->save();
        return view('auth.login');
    }

   public function logar(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ])->onlyInput('email');
    }


    public function dashboard()
    {
        $users = User::all();
        return view('user.dashboard');
    }

    public function listEmpresas()
    {
        $empresas = Empresa::all();
        return view('user.list_empresas', ['empresas' => $empresas]);
    }

    public function destroy($id)
    {
        Empresa::findOrFail($id)->delete();
        return redirect('/dashboard/list/empresas')->with('msg', 'Empresa com id: ' . $id . ' foi deletada com sucesso!');
    }


    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/usuarios/login');
    }
}
