<?php

namespace src\DAO;

class UsuarioDAO {
        private $db;
    
    public function __construct(Conect $db) {
        $this->db = $db;
    }

    public function listar()
    {
        $query = "SELECT id, nome, email, sexo FROM usuarios";
        $resultado = $this->db->getConection()->query($query);
        
        $lista = $resultado->fetchAll();
        
    }

    public function addUsuario(\src\models\Usuario $Usuario)
    {
        $nome = $Usuario->getNome();
        $email = $Usuario->getEmail();
        $sexo = $Usuario->getSexo();
        
        $this->db->getConection();
        $query = "INSERT INTO usuarios (nome, email, sexo) VALUES ($nome, $email, $sexo)";
        $db->exec($query);
    }
}
