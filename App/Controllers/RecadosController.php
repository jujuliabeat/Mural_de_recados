<?php

namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use App\Repositories\RecadosRepository;

class RecadosController {

    private mixed $container;
    
    private RecadosRepository $repository;

    public function __construct($container)
    {
        $this->container = $container;
        $this->repository = new RecadosRepository();
    }
    
    //Adicione seus métodos aqui:

    public function obterTodos (Request $request, Response $response, array $params){

        $data = $this->repository->obterTodos();
        return $response->withJson($data);

    }
    
    public function cadastrar(Request $request, Response $response, array $params){

        $recado = $request->getParsedBody();
        $recado = $this->repository->cadastrar($recado);

        return $response->withJson($recado);

    }

    public function remover(Request $request, Response $response, array $params){
        
        $id = $params['id'];
        $recado = $this->repository->remover($id);

        return $response->withJson($recado);

    }

}
