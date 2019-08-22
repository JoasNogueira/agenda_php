<?php


namespace src\DAO;

require 'src\DAO\Conect.php';

class TelefoneDAO {
    
    private $db;
    
    public function __construct(Conect $db) {
        $this->db = $db;
    }
    public function addTelefone(\src\models\Telefone $telefone)
    {
        $numero = $telefone->getNumero();
            
        $this->db->getConection();
        $query = "INSERT INTO telefones (numero) VALUES ($numero)";
        $this->db->exec($query);
    }
}
