@extends('Shared.layout')

@section('conteudo')

    <div class="row">
        <div class="col-md-5 col-md-offset-1 m-t">
            <div class="col-md-2 text-center m-r">
                <img src="{!! asset('PRF-brasao.png') !!}" width="70" height="84">
            </div>
            <h1>{!! config('PRF.nomeSistema') !!}</h1>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-block">
                    @if ( count($errors) > 0)
                        @foreach ($errors->all() as $erro)
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <h4>Erro?!</h4>
                                {{ $erro }}
                            </div>
                        @endforeach
                    @endif
                    {!! Form::open( array("url" => "auth/login", "class" => "clearfix") ) !!}
                    <h5>Faça seu Login</h5>
                    <fieldset class="form-group">
                        {!! Form::text("login",null,array("id" => "login", "placeholder" => "CPF (somente números)", "class" => "form-control autoFocus")) !!}
                    </fieldset>
                    <fieldset class="form-group">
                        {!! Form::password("senha",array("id" => "senha", "placeholder" => "Senha", "class" => "form-control")) !!}
                    </fieldset>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                    <br><br>
                    <a href="https://www.prf.gov.br/portal/espaco-do-servidor/senhas" target="_blank">Esqueceu a senha,
                        ou deseja alterá-la?</a>| 
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        <div class="col-md-1"></div>
    </div>
@stop