<?php


namespace src\DAO;

class Telefone {
    
    public function inserir()
    {
        $conexao = new Conect();
        $conexao->conectar();
        $quary = "INSERT INTO telefones (numero) VALUES ()";
    }
}
