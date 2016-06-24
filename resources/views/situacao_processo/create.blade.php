@extends('template')

@section('title', 'Cadastrar Situação dos processos')

@section('content')
	{!! Form::open(['route' => 'situacao_processo.store', 'method' => 'POST']) !!}
		
		<div >
			{!! Form::label('descricao_situacao_processo', 'Descrição') !!}
			{!! Form::text('descricao_situacao_processo', null, ['class' => 'form-control', 'required']) !!}
		</div>

		<div > <br>
			{!! Form::submit('Criar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
@stop