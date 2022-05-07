<?php

    require_once __DIR__."/vendor/autoload.php";

    //Aqui a gente recura oque o usuario digitoi e quaal
    //método http ele utilizou
    $method = $_SERVER['REQUEST_METHOD'];
    $path = $_SERVER['PATH_INFO'];

    //iNSTANCIAR CLASSES Router
    $router = new \Aluno\ProjetoPhp\Router($method, $path);

    //Adicionar as rotas validas abaixo!!!!!
    $router->get("/ola-mundo", function(){
        return "Ola mundo!";
    });

    //Adicionar a rotas validas acima!!!!!!

    $result = $router->handler();

    if(!$result){
        Http_response_code(404);
        echo "Pagina não encontrada";
        die();
    }

    echo $result($router->getParams());
    