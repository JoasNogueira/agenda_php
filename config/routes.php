<?php

require '../autoload.php';

use src\controllers\teste;

$rotas = [
    '/teste' => ['classe' => teste::class, 'metodo' => 'testando']
    
];


return $rotas;