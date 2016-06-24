@extends('template')

@section('title', 'Cadastrar Tipo de Infrações Disciplinares')

@section('content')
	{!! Form::open(['route' => 'tipo_infracao_disciplinar.store', 'method' => 'POST']) !!}
		
		<div >
			{!! Form::label('descricao_tipo_infracao_disciplinar', 'Descrição') !!}
			{!! Form::text('descricao_tipo_infracao_disciplinar', null, ['class' => 'form-control', 'required']) !!}
		</div>

		<div > <br>
			{!! Form::submit('Criar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
@stop