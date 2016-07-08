<?php

namespace SIGPAD\Http\Controllers\Auth;

use SIGPAD\Http\Controllers\Controller;
use Exception;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use PRF\DPRFSeguranca;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use ThrottlesLogins;

    public function getIndex()
    {
        return view("Auth.login");
    }

    /**
     * Função para login no sistema. Os parâmetros (login e senha) são passados por POST
     *
     * @return mixed
     */
    public function postLogin(Request $request)
    {
        try {
            Auth::attempt(array('cpf' => $request->get('login'), 'senha' => $request->get('senha')));
            return Redirect::intended('/'); //mudado aqui
        } catch (Exception $e) {
            return back()->withErrors($e->getMessage())->withInput();
        }
    }

    public function getLogout() {
        if(Auth::check()) {
            $seguranca = new DPRFSeguranca(config("PRF.siglaSistema"),config("PRF.producao"));
            $seguranca->auditoria(Auth::user()->cpf, "LOGOUT", "Logout", array());
            Auth::logout();
        }
        return redirect("/");
    }

}
