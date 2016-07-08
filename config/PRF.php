<?php

/*
Para chamar qualquer um desses atributos em qualquer lugar da aplicação use: Config::get("PRF.nomeAtributo")
    Exemplo: Config::get("PRF.nomeCurto"); retornará o nome curto definido abaixo
*/

return [
    "nomeSistema" => "Sistema de Gerenciamento de Processos Administrativos Disciplinares", // Nome que aparece em algumas partes do sistema
    "nomeCurto" => "SIGPAD", // Nome que aparece no cabeçalho do sistema
    "siglaSistema" => "SIGPAD", // Sigla do sistema cadastrado no DPRFSeguranca
    "versao" => "Beta", // Versão do sistema
    "producao" => env('PRF_PRODUCAO', false), // Setar para false se o sistema estiver em modo homologação; true para produção no arquivo .env
];