<?php namespace App\Funcoes;
/**
 * Created by PhpStorm.
 * User: thyago
 * Date: 05/09/14
 * Time: 10:59
 */

use Illuminate\Support\Facades\Session;
use PRF\FaleConosco;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Auth;

class Funcoes {

    /**
     * Função retorna true caso o usuário tenha a permissão passada como parâmetro, false caso não tenha
     *
     * @param $permissao
     * @return bool
     */
    public static function temPermissao($permissao) {
        if (!is_array(Session::get('permissoes'))) {
            return false;
        }
        if (in_array($permissao, Session::get('permissoes'))) {
            return true;
        }
        else {
            return false;
        }
    }

    public static function urlFaleConosco() {
        $faleconosco = new FaleConosco(config("PRF.producao"));
        $url = '';

        if (Auth::check()) {
            $url = "?usuarioCpf=" . Auth::user()->cpf . "&siglaSistema=" . config('PRF.siglaSistema');
        }

        return str_replace("/ws","/generico/mensagemInterna/Create.xhtml" . $url,$faleconosco->getUrl());
    }

}