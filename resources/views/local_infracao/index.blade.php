@extends('template')

@section('title', 'Local das Infrações')

@section ('content')

<h1>Local das Infrações: </h1>

	<a href="{{ route('local_infracao.create') }}" class="btn btn-primary">Inserir novo local</a> <br><br>
	<table border="1">
		<tr>
			<th>Código:</th>
			<th>Descrição:</th>
			<th>Opções</th>
			

		</tr>
			@foreach($local_infracao as $local)
		<tr>
			<td>	{{ $local->id }} </td>
			<td> {{ $local->descricao_local_infracao }} </td>
				<td>		
						<a href="{{ route('local_infracao.show', $local->id) }}" class="btn btn-primary">Ver</a>
						<a href="{{ route('local_infracao.edit', $local->id) }}" class="btn btn-warning">Editar</a>
						
				</td>
		</tr>
			@endforeach
	</table>
	<div class="text-center">
		{{$local_infracao->render()}}
	</div>
@stop
