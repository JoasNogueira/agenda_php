<?php

require '../autoload.php';

use src\controllers\Contatos;

$rotas = [
    '/inicio' => ['classe' => Contatos::class, 'metodo' => 'renderizaHtml']
];


return $rotas;