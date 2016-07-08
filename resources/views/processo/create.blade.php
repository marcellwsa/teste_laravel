@extends('Shared.layout')

@section ('conteudo')
	{!! Form::open(['route' => 'processo.store', 'method' => 'POST']) !!}
		
		<div >
			{!! Form::label('numero_processo', 'Número do processo') !!}
			{!! Form::text('numero_processo', null, ['class' => 'form-control', 'required']) !!}
		</div>

		<div > <br>
			{!! Form::label('local_infracao', 'Local da Infração:') !!}
			{{ Form::select('local_infracao', SIGPAD\Local_infracao::all()->lists('descricao_local_infracao', 'id')) }}
					
		</div>

		<div > <br>
			{!! Form::label('situacao_processo', 'Situacao do Processo:') !!}
			{{ Form::select('situacao_processo', SIGPAD\Situacao_processo::orderBy('descricao_situacao_processo','ASC')->lists('descricao_situacao_processo', 'id')) }}
					
		</div>

		<div > <br>
			{!! Form::label('tipo_infracao_disciplinar', 'Tipo da Infração:') !!}
			{{ Form::select('tipo_infracao_disciplinar', SIGPAD\Tipo_infracao_disciplinar::orderBy('descricao_tipo_infracao_disciplinar','ASC')->lists('descricao_tipo_infracao_disciplinar', 'id')) }}
					
		</div>
		<div > <br>
			{!! Form::label('observacoes', 'Observações') !!}
			{!! Form::text('observacoes', null, ['class' => 'form-control']) !!}
		</div>

		<div > <br>
			{!! Form::label('data_conhecimento_fato', 'Data de conhecimento do fato') !!}
			{!! Form::text('data_conhecimento_fato', null, ['class' => 'form-control']) !!}
		</div>

		<div > <br>
			{!! Form::submit('Criar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
@stop