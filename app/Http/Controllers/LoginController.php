<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function index()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $dados = $request->all();
        $this->validate($request,[
        'username' => 'required|exists:users,cpf',
        'password' => 'required|exists:users,password',
        ]);
        
        if(auth()->attempt(array('cpf' => $dados['username'], 'password' => $dados['password'])))
        {
            return redirect()->route('fornecedores');
        }else{
          
            return redirect()->route('index')
                ->with('error','Usuário ou senha não esta correto!');
        }




    }


}
