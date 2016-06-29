@extends('template')

@section('title', 'Cadastrar Situação dos processos')

@section('content')

	<!--  Duas opções de mostrar os erros-->
		@if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif

	{!! Form::open(['route' => 'situacao_processo.store', 'method' => 'POST']) !!}
		
		<div >
			{!! Form::label('descricao_situacao_processo', 'Descrição') !!}
			{!! Form::text('descricao_situacao_processo', null, ['class' => 'form-control', 'required']) !!}
			@if ($errors->has('descricao_situacao_processo')) <p class="help-block">{{ $errors->first('descricao_situacao_processo') }}</p> @endif

		</div>

		<div > <br>
			{!! Form::submit('Criar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
@stop