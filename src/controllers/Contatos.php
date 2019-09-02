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
}
