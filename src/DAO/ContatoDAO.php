<?php

namespace src\DAO;

require 'src\DAO\Conect.php';
require 'src\models\Contato.php';

class ContatoDAO {
    
    private $db;
    
    public function __construct(Conect $db) {
        $this->db = $db;
    }

    public function listar()
    {
        $query = "SELECT id, nome, email, sexo FROM contatos";
        $resultado = $this->db->getConection()->query($query);
        
        $lista = $resultado->fetchAll();
        
    }

    public function addContato(\src\models\Contato $Contato)
    {
        $nome = $Contato->getNome();
        $email = $Contato->getEmail();
        $sexo = $Contato->getSexo();
        
        $this->db->getConection();
        $query = "INSERT INTO contatos (nome, email, sexo) VALUES ($nome, $email, $sexo)";
        $db->exec($query);
    }
}
