@extends('Shared.layout')

@section ('conteudo')

<h1>Situacões: </h1>

	<a href="{{ route('situacao_processo.create') }}" class="btn btn-primary">Criar nova situação</a> <br><br>
	<table border="1">
		<tr>
			<th>Código:</th>
			<th>Descrição:</th>
			<th>Opções</th>
			

		</tr>
			@foreach($sit as $situacao)
		<tr>
			<td>	{{ $situacao->id }} </td>
			<td> {{ $situacao->descricao_situacao_processo }} </td>
				<td>		
						<a href="{{ route('situacao_processo.show', $situacao->id) }}" class="btn btn-primary">Ver</a>
						<a href="{{ route('situacao_processo.edit', $situacao->id) }}" class="btn btn-warning">Editar</a>
						{{ Form::open(array('method' => 'DELETE', 'route' => array('situacao_processo.destroy', $situacao->id))) }}                       
                            {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
						
				</td>
		</tr>
			@endforeach
	</table>
	<div class="text-center">
		{{$sit->render()}}
	</div>
@stop


 