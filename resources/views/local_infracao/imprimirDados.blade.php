@extends('Shared.layout')

@section ('conteudo')
	<ul>
		<li><b>Descrição:</b> {{ $local_infracao->descricao_local_infracao }}</li>
		
	</ul>
@stop