<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title>{!! config("PRF.nomeSistema") !!}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="PRF - Template Funcional de Sistemas em PHP">
    <meta name="author" content="PRF/DIASI">

    <link rel="shortcut icon" href="{!! asset('favicon.ico') !!}"/>

    <!-- StyleSheets "estáticos" fornecidos pela equipe de design da PRF -->
    <link href="{!! asset('base/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('base/font-awesome.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('base/alertify.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('base/alertify-bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('base/customPRF.css') !!}" rel="stylesheet">
    <link href="{!! asset('base/customPDI.css') !!}" rel="stylesheet">
    <link href="{!! asset('select2/select2.css') !!}" rel="stylesheet">
    <link href="{!! asset('select2/select2-bootstrap.css') !!}" rel="stylesheet">
    <!-- StyleSheet Local ====================================== -->
    <!-- Para chamada de CSS específicos da página               -->
    @yield('style')

    <noscript>
        <div class="hero-unit">
            <h2>Atenção Usuário!</h2>
            <ul>
                <li>Aparentemente seu navegador está com o JavaScript desabilitado.
                    Essa configuração impedirá que o Sistema funcione corretamente.
                    Corrija o problema e clique no botão abaixo para tentar novamente.
                </li>
            </ul>
            <p>
                <a class="btn btn-warning btn-lg" href="{!! route("index") !!}">
                    Tentar Novamente
                </a>
            </p>
        </div>
    </noscript>
</head>

<body class="sidebar-mini {!! Auth::check() ? '' : 'login' !!}">
<header class="main-header">
    <!-- Logo -->
    <a href="{!! route('index') !!}" class="logo hidden-sm-down">
        <span class="gr"><img width="95" title="" alt=""
                              src="data:image/png;base64,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"/></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Mostrar/Esconder Menu</span>
        </a>
        <a href="{{ route("index") }}" class="nome-sistema">
            {!! config("PRF.nomeCurto") !!}
        </a>
        @if(config('PRF.producao') == false)
            <span class="label label-warning label-xg m-t hidden-md-down"> HOMOLOGAÇÃO </span>
            @endif

                    <!-- Menu de Contexto do Usuário -->
            @if (Auth::check())
                <div class="pull-right">
                    <ul class="nav nav-pills">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user"></i>
                                <span class="hidden-sm-down">{!! Auth::user()->nomeCompleto !!}</span>
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{!! url('logout') !!}" class="dropdown-item"><i class="fa fa-power-off"></i>
                                    Sair</a>
                            </div>
                        </li>
                    </ul>
                </div>
            @endif
    </nav>
</header>

<!-- Menú principal lateral ================================================== -->
@if (Auth::check())
    @include('Shared.menu')
@endif

<div class="main-content">
    @include('flash::message')
            <!-- Conteúdo da página    ================================================== -->
    @yield('conteudo')
</div>

<!-- Footer   ================================================== -->
<footer class="main-footer">
    <div class="pull-right">
      <span>
          <small class="text-muted">
              Versão {!! config('PRF.versao') !!}
          </small>
      </span>
    </div>
    <strong>{!! config('PRF.nomeSistema') !!}</strong>
</footer>

<!-- Código para o popup do Fale Conosco ================================= -->
<div id="modalContato" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true" style="display: none;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel"><i class="icon-comments"></i> Envie seus comentários e dúvidas</h3>
    
    </div>
    @if(Auth::check())
        <iframe style="width:96%; height:420px; border:0;margin-top: 10px;" id="iframeContato"
                name="iframeContato" src="{!! Funcoes::urlFaleConosco() !!}" frameborder="0"></iframe>
    @else
        <form method="get" action="{!! Funcoes::urlFaleConosco() !!}"
              class="forms form-inline" id="frmContato" target="iframeContato">

            <div class="modal-body">
                <input type="hidden" name="url" value="mensagem">
                <input type="hidden" name="siglaSistema" value="{!! config('PRF.siglaSistema') !!}">

                <label><strong>Informe seu CPF</strong></label>
                <input type="text" placeholder="Digite seu cpf" name="usuarioCpf" class="validate[required]"
                       id="cpf" maxlength="100" value="" data-mask="99999999999">
                <button class="btn btn-primary" type="submit" data-loading-text="Enviando...">Continuar >></button>
                <iframe style="width:96%; height:480px; border:0;margin-top: 10px; display:none" id="iframeContato"
                        name="iframeContato" src="" frameborder="0"></iframe>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>

            </div>
        </form>
    @endif
</div>

<!-- JavaScript ============================================ -->
<!-- Colocado no final para o documento carregar mais rápido -->
<script src="{!! asset('base/jQuery-2.1.4.min.js') !!}"></script>
<script src="{!! asset('base/jquery.inputmask.bundle.js') !!}"></script>
<script src="{!! asset('base/tether.min.js') !!}"></script>
<script src="{!! asset('base/bootstrap.min.js') !!}"></script>
<script src="{!! asset('base/json2.js') !!}"></script>
<script src="{!! asset('base/fastclick.js') !!}"></script>
<script src="{!! asset('base/sidebar.js') !!}"></script>
<script src="{!! asset('base/alertify.min.js') !!}"></script>
<script src="{!! asset('base/customPRF.js') !!}"></script>
<script src="{!! asset('base/customPDI.js') !!}"></script>
<script src="{!! asset('select2/select2.js') !!}"></script>
<script src="{!! asset('select2/select2_locale_pt-BR.js') !!}"></script>

<!-- JavaScript Local======================================= -->
<!-- Para chamada de scripts específicos da página           -->
<!-- Esses scripts devem ser chamados depois do bloco acima  -->
@yield('scripts')

</body>
</html>
