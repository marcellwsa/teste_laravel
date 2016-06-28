<?php

namespace SIGPAD;

use Illuminate\Database\Eloquent\Model;

class Tipo_infracao_disciplinar extends Model
{
    protected $fillable = ['descricao_tipo_infracao_disciplinar'];

    public function getDescricao($id) 
    {
        $tipo = Tipo_infracao_disciplinar::findOrFail($id);

        echo $tipo->descricao_tipo_infracao_disciplinar;
    }

    public function getId($descricao) 
    {
        $tipo = Tipo_infracao_disciplinar::findOrFail($descricao_tipo_infracao_disciplinar);

        echo $tipo->id;
    }

}
