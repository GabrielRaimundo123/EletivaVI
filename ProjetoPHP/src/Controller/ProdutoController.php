<?php

namespace Aluno\ProjetoPhp\Controller;

use Aluno\ProjetoPhp\Model\DAO\ProdutosDAO;
use Aluno\ProjetoPhp\Model\Entity\produtos;

class ProdutosController{

    //private ProdutosDAO $dao;

    public static function abrirFormularioInserir(){
        require_once "../src/View/inserir_produto.php";
    }

    public static function abrirFormularioAlterar($params){
        $dao = new ProdutosDAO();
        $resultado = $dao->consultarPorId($params[1]);
        require_once "../src/View/alterar_produtos.php";
    }

    public static function abrirListaProdutos(){
        $dao = new ProdutosDAO();
        $resultado = $dao->consultar();
        require_once "../src/View/listar_produtos.php";
    }

    public static function inserirProdutos(){
        $produto = new Produtos();
        $produto->setValor($_POST['valor']);
        $produto->setDescricao($_POST['descricao']);
        $produto->setNome($_POST['nome']);
        $dao = new ProdutosDAO();
        if ($dao->inserir($produto)){
            $resposta = true;
        } else {
            $resposta = false;
        }
        ClientesController::abrirListaProdutos();
    }

    public static function editarProdutos($params){
        $cliente = new Produtos();
        $cliente->setValor($_POST['valor']);
        $cliente->setDescricao($_POST['descricao']);
        $cliente->setNome($_POST['nome']);
        $cliente->setId($params[1]);
        $dao = new ProdutosDAO();
        if ($dao->alterar($Produto)){
            $resposta = true;
        } else {
            $resposta = false;
        }
        ClientesController::abrirListaProdutos();
    }

    public static function excluirProdutos($params){
        $dao = new ProdutosDAO();
        if ($dao->excluir($params[1])){
            $resposta = true;
        } else {
            $resposta = false;
        }
        ClientesController::abrirListaProdutos();
    }

}