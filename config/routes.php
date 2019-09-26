<?php

require '../autoload.php';

use src\controllers\Contatos;

$rotas = [
    '/inicio' => ['classe' => Contatos::class, 'metodo' => 'renderizaHtml'],
    '/detalhes' => ['classe' => Contatos::class, 'metodo' => 'BuscarContatoId']
];


return $rotas;