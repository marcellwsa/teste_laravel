@extends('template')

@section('title', 'Editar Local da Infração')

@section('content')
	{!! Form::open(['route' => ['local_infracao.update', $local_infracao], 'method' => 'PUT']) !!}
		<div >
			{!! Form::label('descricao_local_infracao', 'Descrição') !!}
			{!! Form::text('descricao_local_infracao', $local_infracao->descricao_local_infracao, ['class' => 'form-control', 'required']) !!}
		</div>

		<div > <br>
			{!! Form::submit('Alterar', ['class' => 'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}
@stop