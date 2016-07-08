@extends('Shared.layout')

@section ('conteudo')
	<ul>
		<li><b>Descrição:</b> {{ $local_infracao->descricao_local_infracao }}</li>
		<li>
			{!! Form::open(['route' => ['local_infracao.destroy', $local_infracao->id], 'method' => 'DELETE']) !!}
							{!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!} 

		</li>
		<li>
			
		</li>
	</ul>
@stop