@extends('Shared.layout')

@section('conteudo')
    @include('Shared.boxHeader',['titulo' => 'Avisos'])

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                @forelse($faleconosco as $key => $mensagem)
                    <div class="card">
                        <div class="card-header">
                            <div class="label label-warning label-lg">
                                {!! $key + 1 !!}
                            </div>
                            {!! date("d/m/Y H:i:s",$mensagem['dataCadastro'] / 1000) !!}
                        </div>
                        <div class="card-block text-justify">
                            <blockquote class="card-blockquote">
                                <p>{!! str_replace("\r\n","<br/>",$mensagem['mensagem']) !!}</p>
                            </blockquote>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-info">
                        Nenhuma Mensagem Cadastrada.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

@stop