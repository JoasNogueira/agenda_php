<?php

namespace src\DAO;

class UsuarioDAO {
        private $db;
    
    public function __construct() {
        $conn = new Connect();
        $this->db = $conn->getConection();
    }

    public function listar()
    {
        $query = "SELECT id, nome, email, sexo FROM usuarios";
        $resultado = $this->db->query($query);
        
        $lista = $resultado->fetchAll();
        
    }

    public function addUsuario(\src\models\Usuario $Usuario)
    {
        $nome = $Usuario->getNome();
        $email = $Usuario->getEmail();
        $sexo = $Usuario->getSexo();
        
        $query = "INSERT INTO usuarios (nome, email, sexo) VALUES ($nome, $email, $sexo)";
        $this->db->exec($query);
    }
    
    public function editarContato(\src\models\Usuario $usuario)
    {
        
        $query = "UPDATE usuario SET nome='$usuario->getNome()', email_usuario='$usuario->getEmail()', sexo_usuario='$usuario->getSexo()' WHERE id_usuario=$usuario->getId()";
    }
}
