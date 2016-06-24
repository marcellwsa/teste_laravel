@extends('template')

@section('title', 'Tipos de infrações disciplinares')

@section ('content')

<h1>Tipos: </h1>

	<a href="{{ route('tipo_infracao_disciplinar.create') }}" class="btn btn-primary">Criar um novo tipo</a> <br><br>
	<table border="1">
		<tr>
			<th>Código:</th>
			<th>Descrição:</th>
			<th>Opções</th>
			

		</tr>
			@foreach($tipo_infracao_disciplinar as $tipo)
		<tr>
			<td>	{{ $tipo->id }} </td>
			<td> {{ $tipo->descricao_tipo_infracao_disciplinar }} </td>
				<td>		
						<a href="{{ route('tipo_infracao_disciplinar.show', $tipo->id) }}" class="btn btn-primary">Ver</a>
						<a href="{{ route('tipo_infracao_disciplinar.edit', $tipo->id) }}" class="btn btn-warning">Editar</a>
						
				</td>
		</tr>
			@endforeach
	</table>
	<div class="text-center">
		{{$tipo_infracao_disciplinar->render()}}
	</div>
@stop