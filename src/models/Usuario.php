<?php

namespace src\models;

class Usuario {
    
    private $id;
    private $email;
    private $sexo;
    private $nome;
    

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
          
            
}
