<?php

namespace Aluno\ProjetoPhp\Model\DAO;

use Aluno\ProjetoPhp\Model\Entity\Produtos;

class ProdutosDAO{

    public function inserir(Produtos $a){
        try{
            $sql = "INSERT INTO `produto`(`nome`, `descricao` , `valor`) VALUES (:nome, :descricao, :valor)";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":nome", $a->getNome());
            $p->bindValue(":descricao", $a->getdescricao());
            $p->bindValue(":valor", $a->getvalor());
            return $p->execute();
        } catch(\Exception $e){
            return false;
        }
    }

    public function alterar(Produtos $a){
        try{
            $sql = "UPDATE `produtos` SET `nome`=:nome,`descricao`=:descricao, `valor`=:valor WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":nome", $a->getNome());
            $p->bindValue(":descricao", $a->getdescricao());
            $p->bindValue(":valor", $a->getvalor());
            $p->bindValue(":id", $a->getId());
            return $p->execute();
        } catch(\Exception $e){
            return false;
        }
    }

    public function excluir($id){
        try{
            $sql = "DELETE FROM `produtos` WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":id", $id);
            return $p->execute();
        } catch(\Exception $e){
            return false;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT * FROM prdutos";
            return Conexao::conectar()->query($sql);
        } catch(\Exception $e){
            return false;
        }
    }

    public function consultarPorId($id){
        try{
            $sql = "SELECT * FROM produtos WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":id", $id);
            $p->execute();
            return $p->fetch();
        } catch(\Exception $e){
            return false;
        }
    }

}