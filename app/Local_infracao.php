<?php

namespace SIGPAD;

use Illuminate\Database\Eloquent\Model;

class Local_infracao extends Model
{
    protected $table = 'local_infracaos';
    
    protected $fillable = ['descricao_local_infracao'];
}
