<?php

require '../autoload.php';

//use src\DAO\ContatoDAO;
//use src\models\Contato;
//use src\models\Usuario;

$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($caminho, $rotas))
{
    http_response_code(404);
    exit();
}


$classeControladora = $rotas[$caminho]['classe'];
$metodoControlador = $rotas[$caminho]['metodo'];

$controlador = new $classeControladora();
$controlador->$metodoControlador();


//$contatoD = new ContatoDAO();
//$contato = new Contato();
//$usuario = new Usuario();
//
//$contato->setNome('Daniel');
//$contato->setSexo('M');
//$contato->setEmail('magalhaesdaniel2009@hotmail.com');
//$usuario->setId('1');
//$contato->setUsuario($usuario);
//
////$contatoD->addContato($contato);
//
//echo '<pre>';
//var_dump($contatoD->listar());

