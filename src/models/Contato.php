<?php

namespace src\models;

class Contato {
    private $id;
    private $nome;
    private $email;
    private $sexo;
    private $telefones;
    private $usuario;
            
    
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
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

    function getTelefones(): array {
        return $this->telefones;
    }

    function setTelefones($telefones): array {
        $this->telefones = $telefones;
    }

    function getUsuario(): Usuario {
        return $this->usuario;
    }

    function setUsuario(Usuario $usuario) {
        $this->usuario = $usuario;
    }



}
