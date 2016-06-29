@extends('template')

@section('title', 'Editar Processo')

@section('content')
	{!! Form::open(['route' => ['processo.update', $processo], 'method' => 'PUT']) !!}
		
		<div >
			{!! Form::label('numero_processo', 'Número do processo') !!}
			{!! Form::text('numero_processo', $processo->numero_processo, ['class' => 'form-control', 'required']) !!}
		</div>

		<!-- Nome do select, Lista dos objetos do BD, e opcao eslecionada default--> 
		<div > <br>
			{!! Form::label('local_infracao', 'Local da Infração:') !!}
			{{ Form::select('local_infracao', SIGPAD\Local_infracao::all()->lists('descricao_local_infracao', 'id'), ($processo->local_infracao_id)) }} 
					
		</div>

		<div > <br>
			{!! Form::label('situacao_processo', 'Situacao do Processo:') !!}
			{{ Form::select('situacao_processo', SIGPAD\Situacao_processo::orderBy('descricao_situacao_processo','ASC')->lists('descricao_situacao_processo', 'id'), ($processo->situacao_processo_id) ) }}
					
		</div>

		<div > <br>
			{!! Form::label('tipo_infracao_disciplinar', 'Tipo da Infração:') !!}
			{{ Form::select('tipo_infracao_disciplinar', SIGPAD\Tipo_infracao_disciplinar::orderBy('descricao_tipo_infracao_disciplinar','ASC')->lists('descricao_tipo_infracao_disciplinar', 'id'), ($processo->tipo_infracao_disciplinar_id)) }}
					
		</div>
		<div > <br>
			{!! Form::label('observacoes', 'Observações') !!}
			{!! Form::text('observacoes', $processo->observacoes, ['class' => 'form-control']) !!}
		</div>

		<div > <br>
			{!! Form::label('data_conhecimento_fato', 'Data de conhecimento do fato') !!}
			{{ $proc = new SIGPAD\Processo }}
			<!-- 
			{!! Form::text('data_conhecimento_fato', $proc->traduz_data_para_exibir($processo->data_conhecimento_fato), ['class' => 'form-control']) !!} -->
			<input type="text" name="data_conhecimento_fato" value="<?php $proc->traduz_data_para_exibir($processo->data_conhecimento_fato) ;?>" 
			class= "form-control" />
		</div>

		<div > <br>
			{!! Form::submit('Salvar alterações', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
@stop