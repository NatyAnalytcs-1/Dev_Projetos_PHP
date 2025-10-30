<?php

use App\Controller\AlunoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
    case '/':
        echo "página inicial";
        break;

    case '/alunos':
        AlunoController::listar();  
        break;

    case '/alunos/cadastro':
        AlunoController::cadastro();    
        break;
    
    default:
        http_response_code(404);
        echo "Página não encontrada ❌";
        break;
}
