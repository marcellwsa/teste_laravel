@extends('template')

@section('title', 'Processos')

@section('content')

	<ul>
		<li><b>Processo Cadastrado:</b> {{ $processo->numero_processo }}</li>

		<li><b>Local da infração: </b> <?php   $local = new SIGPAD\Local_infracao; 
			$local->getDescricao($processo->local_infracao_id) ?></li>

		<li><b>Tipo da infração:</b> <?php $tipo = new SIGPAD\Tipo_infracao_disciplinar;
			$tipo->getDescricao($processo->tipo_infracao_disciplinar_id)	 ?></li>

		<li><b>Situação do processo:</b><?php $situacao = new SIGPAD\Situacao_processo;
			$situacao->getDescricao($processo->situacao_processo_id) ?></li>

		<li><b>Observações:</b> {{ $processo->observacoes }}</li>

		<li><b>Data Conhecimento dos fatos pela autoridade:</b> <?php $proc = new SIGPAD\Processo;
			echo $proc->traduz_data_para_exibir($processo->data_conhecimento_fato) ?></li>

		<li><b>Prescrições:  </b> 
			<ul>
				<li><b>Advertência: </b>
					<?php  $data_com_traco = str_replace('/', '-', $proc->traduz_data_para_exibir($processo->data_conhecimento_fato)); ?>
					<?php echo date('d/m/Y', strtotime("+180 days",strtotime($data_com_traco))); ?>
				</li>
				<li><b>Suspensão: </b>
					<?php echo date('d/m/Y', strtotime("+2 years",strtotime($data_com_traco))); ?>
				</li>
				<li><b>Demissão: </b>
					<?php echo date('d/m/Y', strtotime("+5 years",strtotime($data_com_traco))); ?>
				</li>
			

			</ul>
		
		</li>

		<br><br>
		<li> 
			{!! Form::open(['route' => ['processo.destroy', $processo->id], 'method' => 'DELETE']) !!}
							{!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!} 

		</li>
	</ul>
@stop