<?php

namespace SIGPAD;

use Illuminate\Database\Eloquent\Model;

class Local_infracao extends Model
{
    protected $table = 'local_infracaos';
    
    protected $fillable = ['descricao_local_infracao'];

    public function getDescricao($id) 
    {
        $local_infracao = Local_infracao::findOrFail($id);

        echo $local_infracao->descricao_local_infracao;
    }

    public function getId($descricao) 
    {
        $local_infracao = Local_infracao::findOrFail($descricao_local_infracao);

        echo $local_infracao->id;
    }
    
}
