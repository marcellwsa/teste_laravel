<?php

namespace SIGPAD;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    protected $table = 'processos';
    
    protected $fillable = ['numero_processo', 'situacao_processo_id', 'local_infracao_id', 
    						'tipo_infracao_disciplinar_id', 'observacoes'
    ];
}
