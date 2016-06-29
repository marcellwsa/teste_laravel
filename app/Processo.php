<?php

namespace SIGPAD;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    protected $table = 'processos';
    
    protected $fillable = ['numero_processo', 'situacao_processo_id', 'local_infracao_id', 
    						'tipo_infracao_disciplinar_id', 'observacoes', 'data_conhecimento_fato'
    ];

    public static function traduz_data_para_exibir($data) {
    	if ($data == '' or $data == '0000-00-00') {
    		echo 'sem data';
    	} else {
    		$dados = explode('-', $data);
    		if (count($dados) !=3) {
    			echo $data;
    		}
    		$data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";
    		echo $data_exibir;
    	}
    
    }
}
