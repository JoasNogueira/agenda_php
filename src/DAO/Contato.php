<?php

namespace src\DAO;

require 'src\DAO\Conect.php';

class Contato {
    
    
    public function listar()
    {
        $quary = "SELECT id, nome, email, sexo FROM contatos";
        $conexao = new Conect();
        $resultado = $conexao->quary($quary);
        
        $lista = $resultado->fetchAll();
        
    }

        public function inserir()
    {
        $quary = "INSERT INTO contatos (nome, email, sexo) VALUES ()";
    }
}
