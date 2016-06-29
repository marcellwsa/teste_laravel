<?php

namespace SIGPAD;

use Illuminate\Database\Eloquent\Model;

class Situacao_processo extends Model
{
    protected $fillable  =['descricao_situacao_processo'];

    public static $rules = array (
                'descricao_situacao_processo' => 'required|numeric'
            );

    public function getDescricao($id) 
    {
        $situacao = Situacao_processo::findOrFail($id);

        echo $situacao->descricao_situacao_processo;
    }

    public function getId($descricao) 
    {
        $situacao = Situacao_processo::findOrFail($descricao_situacao_processo);

        echo $situacao->id;
    }
}

