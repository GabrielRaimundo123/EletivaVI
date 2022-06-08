<?php

namespace Aluno\ProjetoPhp\Model\DAO;

use PDO;

class Conexao{

    public static function conectar(){
        return 
        new PDO("mysql:host=localhost; dbname=projetophp",
                    "root",
                    "");
    }

}