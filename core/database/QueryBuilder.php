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

    public function insertUsuarios(array $dados)
    {

        try {
            $query = $this->pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUE (:nome, :email, :senha)");
            $query->bindValue(':nome', $dados['nome']);
            $query->bindValue(':email', $dados['email']);
            $query->bindValue(':senha', $dados['senha']);
            $query->execute();
        }
        catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function editUsuario(array $dados)
    {
        try {
            $query = $this->pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id");
            $query->bindValue(':nome', $dados['nome']);
            $query->bindValue(':email', $dados['email']);
            $query->bindValue(':senha', $dados['senha']);
            $query->bindValue(':id', $dados['id']);
            $query->execute();
        }
        catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function deleteUsuario(string $id)
    {
        try {
            $query = $this->pdo->prepare("DELETE FROM usuarios WHERE id = :id");
            $query->bindValue(':id', $id);
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