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
        'username' => 'required',
        'password' => 'required',
        ]);
        
        if(auth()->attempt(array('cpf' => $dados['username'], 'password' => $dados['password'])))
        {
            return redirect()->route('home');
        }else{
          
            return redirect()->route('index')
                ->with('error','Usuário ou senha não esta correto!');
        }




    }


}
