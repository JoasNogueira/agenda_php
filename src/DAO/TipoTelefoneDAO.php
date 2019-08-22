<?php

namespace src\DAO;

require 'src\DAO\Conect.php';
require 'src\models\TipoTelefone.php';

class TipoTelefoneDAO {
    private $db;
    
    public function __construct(Conect $db) {
        $this->db = $db;
    }
    public function addTelefone(\src\models\TipoTelefone $tipoTelefone)
    {
        $tipoTelefone = $tipoTelefone->getNome();
                
        $this->db->getConection();
        $query = "INSERT INTO tipoTelefones (nome) VALUES ($tipoTelefone)";
        $this->db->exec($query);
    }
}
