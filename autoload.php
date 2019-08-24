<?php


spl_autoload_register(
    function (string $namespaceClass): Void{
        $caminho = '..' . DIRECTORY_SEPARATOR;
        $diretorio_classe = str_replace('\\', DIRECTORY_SEPARATOR, $namespaceClass);
        include_once getcwd() . DIRECTORY_SEPARATOR . $caminho . "{$diretorio_classe}.php";
    }      
);
