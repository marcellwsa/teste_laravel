@extends('template')

@section('title', 'Ver Tipo de Infrações Disciplinares')

@section('content')
	<ul>
		<li><b>Descrição:</b> {{ $tipo_infracao_disciplinar->descricao_tipo_infracao_disciplinar }}</li>
		<li>
			{!! Form::open(['route' => ['tipo_infracao_disciplinar.destroy', $tipo_infracao_disciplinar->id], 'method' => 'DELETE']) !!}
							{!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!} 

		</li>
	</ul>
@stop