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

        //QUERY DE PRODUTOS

    public function selectProdutos()
    {
        try{
            $query = $this->pdo->prepare("SELECT P.id, P.nome, P.valor, P.descricao, P.imagem, C.nome AS categoria FROM produto P INNER JOIN categorias C ON P.categorias_id=C.id");
            $query->execute();
            $produtos = $query->fetchAll(PDO::FETCH_ASSOC);

            return $produtos;
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function insertProduto(array $product)
    {

        try {
            $query = $this->pdo->prepare("INSERT INTO produto (nome, valor, descricao, categorias_id) VALUE (:nome, :valor, :descricao, :categorias_id)");
            $query->bindValue(':nome', $product['nome']);
            $query->bindValue(':valor', $product['valor']);
            $query->bindValue(':descricao', $product['descricao']);
            $query->bindValue(':categorias_id', $product['categorias_id']);
            $query->execute();
        }
        catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function editProduto(array $product)
    {
        try {
            $query = $this->pdo->prepare("UPDATE produto SET nome = :nome, valor = :valor, descricao = :descricao, categorias_id = :categorias_id  WHERE id = :id");
            $query->bindValue(':nome', $product['nome']);
            $query->bindValue(':valor', $product['valor']);
            $query->bindValue(':descricao', $product['descricao']);
            $query->bindValue(':categorias_id', $product['categorias_id']);
            $query->bindValue(':id', $product['id']);
            $query->execute();
        }
        catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function deleteProduto(string $id)
    {
        try {
            $query = $this->pdo->prepare("DELETE FROM produto WHERE id = :id");
            $query->bindValue(':id', $id);
            $query->execute();
        }
        catch(Exception $e) {
            die($e->getMessage());
        }
    }
    //FIM DO QUERY DE PRODUTOS

    public function selectCategorias()
    {
        try{
            $query = $this->pdo->prepare("SELECT * FROM categorias");
            $query->execute();
            $produtos = $query->fetchAll(PDO::FETCH_ASSOC);

            return $produtos;
        }
        catch(Exception $e){
            die($e->getMessage());
        }
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