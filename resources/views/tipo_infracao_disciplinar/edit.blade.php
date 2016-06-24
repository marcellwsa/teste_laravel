@extends('template')

@section('title', 'Editar Situação dos Processos')

@section('content')
	{!! Form::open(['route' => ['tipo_infracao_disciplinar.update', $tipo_infracao_disciplinar], 'method' => 'PUT']) !!}
		<div >
			{!! Form::label('descricao_tipo_infracao_disciplinar', 'Descrição') !!}
			{!! Form::text('descricao_tipo_infracao_disciplinar', $tipo_infracao_disciplinar->descricao_tipo_infracao_disciplinar, ['class' => 'form-control', 'required']) !!}
		</div>

		<div > <br>
			{!! Form::submit('Alterar', ['class' => 'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}
@stop