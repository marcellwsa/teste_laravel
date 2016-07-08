@extends('Shared.layout')

@section ('conteudo')
	{!! Form::open(['route' => 'local_infracao.store', 'method' => 'POST']) !!}
		
		<div >
			{!! Form::label('descricao_local_infracao', 'Descrição') !!}
			{!! Form::text('descricao_local_infracao', null, ['class' => 'form-control', 'required']) !!}
		</div>

		<div > <br>
			{!! Form::submit('Criar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
@stop