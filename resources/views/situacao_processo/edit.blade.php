@extends('template')

@section('title', 'Editar Situação dos Processos')

@section('content')
	{!! Form::open(['route' => ['situacao_processo.update', $situacao_processo], 'method' => 'PUT']) !!}
		<div >
			{!! Form::label('descricao_situacao_processo', 'Descrição') !!}
			{!! Form::text('descricao_situacao_processo', $situacao_processo->descricao_situacao_processo, ['class' => 'form-control', 'required']) !!}
		</div>

		<div > <br>
			{!! Form::submit('Alterar', ['class' => 'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}
@stop