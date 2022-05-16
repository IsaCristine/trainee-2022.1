<?php

namespace App\Core\Database;

use Exception;
use PDO;

class QueryBuilder
{
    protected $pdo;


    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /*Exemplo de código para selecionar todos os 
          "elementos" de uma tabela:*/
        
        // public function selectAll($table)
        // {
        //     $query = "select * from {$table}";
        //     try {
        //         $stmt = $this->pdo->prepare($query);
        //         $stmt->execute();
        //         return $stmt->fetchAll(PDO::FETCH_CLASS);
        //     } catch (Exception $error) {
        //         die($error->getMessage());
        //     }
        // }

    public function selectAll()
    {
        
    }

    public function select()
    {

    }

    public function insert()
    {
      
    }

    public function edit()
    {
         
    }

    public function delete()
    {
      
    }

    public function read()
    {
      
    }
}
