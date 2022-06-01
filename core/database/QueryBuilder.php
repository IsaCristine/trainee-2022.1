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

    //**********QUERIES DE PAGINACAO**********//
    public function list_page_products($first_item, $quantity){
        try{
            $query = $this->pdo->prepare("SELECT * FROM produto ORDER BY id DESC 
                                            LIMIT $first_item, $quantity");
            $query->execute();

            $products = $query->fetchAll(PDO::FETCH_ASSOC);

            return $products;

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    //pega a quantidade de paginas que vai ter
    public function quantity_pages($results_per_page){
        try{
            $query = $this->pdo->prepare("SELECT COUNT(id) AS product_quantity FROM produto");
            $query->execute();

            $products_quantity = $query->fetch(PDO::FETCH_ASSOC);
            $products_quantity = $products_quantity["product_quantity"];

            //quantidade de produtos total / quantidade de produtos em uma pagina
            $quantity_pages = ceil($products_quantity/$results_per_page);

            return $quantity_pages;

        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    //**********FIM QUERIES DE PAGINAÇÃO**********//
}
