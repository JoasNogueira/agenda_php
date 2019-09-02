<?php

namespace src\DAO;

use src\DAO\Connect;
use src\models\Contato;
use src\models\Usuario;


class ContatoDAO {
    
    private $db;
    
    public function __construct() {
        $conn = new Connect();
        $this->db = $conn->getConection();
    }

    public function listar(): Array
    {
        $query = "SELECT id_contato, nome, email_contato, sexo_contato FROM contato";
        $resultado = $this->db->query($query);
        
        $listaDB = $resultado->fetchAll();
        
        $lista = [];
        
        foreach ($listaDB as $c)
        {
            $contato = new Contato();
            $contato->setId($c['id_contato']);
            $contato->setNome($c['nome']);
            $contato->setSexo($c['sexo_contato']);
            $contato->setEmail($c['email_contato']);
            
            $lista[] = $contato;
        }
        
        
        return $lista;
    }
    
    public function buscarPorId ($id): Contato
    {
        $query = "SELECT id_contato, nome, email_contato, sexo_contato FROM contato WHERE id_contato=$id";
        $resultado = $this->db->query($query);
        
        $contatoDB = $resultado->fetch();
        
            $contato = new Contato();
            $contato->setId($contatoDB['id_contato']);
            $contato->setNome($contatoDB['nome']);
            $contato->setSexo($contatoDB['sexo_contato']);
            $contato->setEmail($contatoDB['email_contato']);
        
            
        
        return $contato;
    }

    public function addContato(Contato $contato)
    {
        try {
            $nome = $contato->getNome();
            $email = $contato->getEmail();
            $sexo = $contato->getSexo();
            $id_usuario = $contato->getUsuario()->getId();
        
            $query = "INSERT INTO contato (nome, email_contato, sexo_contato, id_usuario) VALUES ('$nome', '$email', '$sexo',$id_usuario)";
            $this->db->exec($query);
            
            echo 'Contato adicionnado com sucesso';
            
            return true;
        } catch (PDOException $ex) {
            echo 'Erro ao inserir o contato: ' . $ex->getMessage();
        }

    }
    
    public function editarContato(Contato $contato)
    {
        
        $query = "UPDATE contato SET nome='$contato->getNome()', email_contato='$contato->getEmail()', sexo_contato='$contato->getSexo()' WHERE id_contato=$contato->getId()";
    }
    
    public function excluirContato(Contato $contato)
    {
        $query = "DELETE FROM contato WHERE id_contato=$contato->getId()";
    }
}

/*$contatoD = new ContatoDAO();
$contato = new Contato();
$usuario = new \src\models\Usuario();

$contato->setNome('Daniel');
$contato->setSexo('M');
$contato->setEmail('magalhaesdaniel2009@hotmail.com');
$usuario->setId('1');
$contato->setUsuario($usuario);

//$contatoD->addContato($contato);

echo '<pre>';
var_dump($contatoD->listar());*/