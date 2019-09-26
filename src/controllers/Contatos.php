<?php

namespace src\controllers;

use src\models\Contato;
use src\controllers\AbstractController;
use src\DAO\ContatoDAO;

class Contatos extends AbstractController {
    
    public function renderizaHtml()
    {
        $repositorio = new ContatoDAO();
        echo $this->renderizar('../view/listar-contatos.php',[
            'contatos' => $repositorio->listar()
        ]);

    }
    
    public function BuscarContatoId()
    {
        
        $id = filter_input(
                INPUT_GET, 
                'id', 
                FILTER_VALIDATE_INT
        );
        
        if(is_null($id) || $id === false){
            header('Location: /inicio');
            return;
        }
        
        
        
        $repositorio = new ContatoDAO();
        $contato = $repositorio->buscarPorId($id);
        echo $this->renderizar('../view/detalhes-contato.php',[
            'contato' => $contato
        ]);

    }
}
