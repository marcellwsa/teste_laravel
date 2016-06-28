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
		<li>
			{!! Form::open(['route' => ['processo.destroy', $processo->id], 'method' => 'DELETE']) !!}
							{!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!} 

		</li>
	</ul>
@stop