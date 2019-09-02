<?php

namespace src\controllers;

abstract class AbstractController {
    
    public function renderizar (string $caminhoTemplate, array $dados)
    {
        extract($dados);
        ob_start();
        include __DIR__ . '/../view/template/material/inicioHtml.php'; require __DIR__ . '/../view/' . $caminhoTemplate; include __DIR__ . '/../view/template/material/fimHtml.php';
        $html = ob_get_clean();
        
        return $html;
    }
}
