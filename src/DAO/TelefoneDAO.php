<?php

namespace src\DAO;

require 'src\DAO\Conect.php';
require '..\models\Telefone.php';

use src\models\Telefone;


class TelefoneDAO {
    
    private $db;
    
    public function __construct() {
        $conn = new Connect();
        $this->db = $conn->getConection();
    }
    public function addTelefone(Telefone $telefone): array
    {
        $numero = $telefone->getNumero();
            
        $query = "INSERT INTO telefone (numero) VALUES ($numero)";
        $this->db->exec($query);
    }
    
    public function editarTelefone(Telefone $telefone)
    {
        
        $query = "UPDATE telefone SET numero=$telefone->getNumero() WHERE id_contato=$telefone->getId()";
    }
    
    public function excluirContato(Telefone $telefone)
    {
        $query = "DELETE FROM telefone WHERE id_telefone=$telefone->getId()";
    }
}
