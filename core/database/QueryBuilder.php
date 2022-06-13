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

        //QUERY DE USUARIOS
    public function selectUsuarios()
    {
        try{
            $query = $this->pdo->prepare("SELECT * FROM usuarios");
            $query->execute();
            $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

            return $usuarios;
        }
            catch(Exception $e){
                die($e->getMessage());
            }
         
    }
    //QUERY DE CATEGORIAS
    public function selectCategorias()
    {
        try{
            $query = $this->pdo->prepare("SELECT * FROM categorias");
            $query->execute();
            $categorias = $query->fetchAll(PDO::FETCH_ASSOC);
            
            return $categorias;
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }


    public function insertCategoria(string $name)
    {
        
        try {
            $query = $this->pdo->prepare("INSERT INTO categorias (Nome) VALUE (?)");
            $query->bindValue(1, $name);
            $query->execute();
        }
        catch(Exception $e) {
            die($e->getMessage());
        }
    }

    
    public function editCategoria(string $id, string $name)
    {
        try {
            $query = $this->pdo->prepare("UPDATE categorias SET Nome = ? WHERE id=?");
            $query->bindValue(1, $name);
            $query->bindValue(2, $id);
            $query->execute();
        }
        catch(Exception $e) {
            die($e->getMessage());
        }
    }

    
    public function deleteCategoria(string $id)
    {
        try {
            $query = $this->pdo->prepare("DELETE FROM categorias WHERE id = ?");
            $query->bindValue(1, $id);
            $query->execute();
        }
        catch(Exception $e) {
            die($e->getMessage());
        }
    }
    //FIM DO QUERY DE USUARIOS
    

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
