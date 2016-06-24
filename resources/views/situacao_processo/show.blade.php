@extends('template')

@section('title', 'Ver Situação do processo')

@section('content')
	<ul>
		<li><b>Descrição:</b> {{ $situacao_processo->descricao_situacao_processo }}</li>
		<li>
			{!! Form::open(['route' => ['situacao_processo.destroy', $situacao_processo->id], 'method' => 'DELETE']) !!}
							{!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!} 

		</li>
	</ul>
@stop