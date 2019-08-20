<?php

namespace src\DAO;

class Conect {
    
    private $servername = 'mysql:host=localhost;dbname=modelo_fisico';
    private $user = 'Monkey';
    private $pass = '';

    
    public function conectar(){
        try{
    
            $conexao = new PDO($servername, $user, $pass);
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $ex) {
            echo "Connection failed: " . $ex->getMessage();
        }
    }
}