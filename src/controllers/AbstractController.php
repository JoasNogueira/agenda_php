<?php

namespace src\controllers;

class AbstractController {
    
    public function renderizar (string $caminhoTemplate, array $dados)
    {
        extract($dados);
        ob_start();
        require __DIR__ . '/../view/' . $caminhoTemplate;
        $html = ob_get_clean();
        
        return $html;
    }
}
