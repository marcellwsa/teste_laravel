@extends('template')

@section('title', 'Processos Cadastrados')

@section ('content')

<h1>Processos: </h1>

	<a href="{{ route('processo.create') }}" class="btn btn-primary">Inserir novo processo</a> <br><br>
	<table border="1">
		<?php use SIGPAD\Local_infracao; 
		?>
		<tr>
			<th>Código:</th>
			<th>Processo n:</th>
			<th>Local:</th>
			<th>Tipo de infração:</th>
			<th>Situação:</th>
			<th>Observãções:</th>
			<th>Opções:</th>
			<th>Excluir:</th>
			

		</tr>
			@foreach($processo as $proc)
		<tr>
			<td align="center"> {{ $proc->id }} </td>
			<td> {{ $proc->numero_processo }} </td>
			<td> <?php   $local = new Local_infracao; 
			$local->getDescricao($proc->local_infracao_id) ?></td>   

			<td> <?php $tipo = new SIGPAD\Tipo_infracao_disciplinar;
			$tipo->getDescricao($proc->tipo_infracao_disciplinar_id)	 ?> </td>

			<td> <?php $situacao = new SIGPAD\Situacao_processo;
			$situacao->getDescricao($proc->situacao_processo_id)   ?> </td>

			<td> {{ $proc->observacoes }} </td>
				<td>		
						<a href="{{ route('processo.show', $proc->id) }}" class="btn btn-primary">Ver</a>
						<a href="{{ route('processo.edit', $proc->id) }}" class="btn btn-warning">Editar</a>
						
				</td>
				<td>
					
				</td>
		</tr>
			@endforeach
	</table>
	<div class="text-center">
		{{$processo->render()}}
	</div>
@stop
