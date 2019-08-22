<?php

namespace src\DAO;

class Conect {
    
    private $host = 'mysql:host=localhost;dbname=agenda';
    private $user = 'Root';
    private $pass = '';
    
    public function __construct() {
        $this->conectar();
    }
    
    public function getConection()
    {
        return $this->conexao;
    }
    

    public function conectar(){
        try{
    
            $this->conexao = new PDO(
                    $this->host,
                    $this->user,
                    $this->pass);
            
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'conetion susseful';
            
        } catch (PDOException $ex) {
            echo "Connection failed: " . $ex->getMessage();
        }
    }
}