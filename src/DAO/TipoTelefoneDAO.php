<?php

namespace src\DAO;

require 'src\DAO\Conect.php';
require 'src\models\TipoTelefone.php';

class TipoTelefoneDAO {
    private $db;
    
    public function __construct() {
        $conn = new Connect();
        $this->db = $conn->getConection();
    }
    public function addTelefone(\src\models\TipoTelefone $tipoTelefone)
    {
        $tipoTelefone = $tipoTelefone->getNome();
                
        $query = "INSERT INTO tipoTelefone (nome) VALUES ($tipoTelefone)";
        $this->db->exec($query);
    }
}
