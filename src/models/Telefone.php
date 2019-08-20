<?php

namespace src\models;

class Telefone {
    
    private $id;
    private $numero;
    private $contato;
    private $tipoTelefone;
    
    
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getNumero() {
        return $this->numero;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function getContato() {
        return $this->contato;
    }

    function setContato($contato) {
        $this->contato = $contato;
    }

    function getTipoTelefone() {
        return $this->tipoTelefone;
    }

    function setTipoTelefone($tipoTelefone) {           
        $this->tipoTelefone = $tipoTelefone;
    }


    
}
