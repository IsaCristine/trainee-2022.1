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
    //QUERY DE PRODUTOS
    public function insertProduto(array $product)
    {

        try {
            $query = $this->pdo->prepare("INSERT INTO produto (nome, valor, info, descricao, categorias_id, imagem) VALUE (:nome, :valor, :descricao, :categorias_id, :imagem)");
            $query->bindValue(':nome', $product['nome']);
            $query->bindValue(':valor', $product['valor']);
            $query->bindValue(':info', $product['info']);
            $query->bindValue(':descricao', $product['descricao']);
            $query->bindValue(':categorias_id', $product['categorias_id']);
            $query->bindValue(':imagem', $product['imagem']);
            $query->execute();
        }
        catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function editProduto(array $product)
    {
        try {
            $query = $this->pdo->prepare("UPDATE produto SET nome = :nome, valor = :valor, info = :info, descricao = :descricao, categorias_id = :categorias_id, imagem = :imagem  WHERE id = :id");
            $query->bindValue(':nome', $product['nome']);
            $query->bindValue(':valor', $product['valor']);
            $query->bindValue(':info', $product['info']);
            $query->bindValue(':descricao', $product['descricao']);
            $query->bindValue(':categorias_id', $product['categorias_id']);
            $query->bindValue(':id', $product['id']);
            $query->bindValue(':imagem', $product['imagem']);
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


    //**********QUERIES DE PAGINACAO**********//

    //criado exclusivamente pra pagina produtos controller
    public function list_products($first_item, $quantity)
    {
        try{
            $query = $this->pdo->prepare("SELECT P.id, P.nome, P.valor, P.descricao, P.info, P.imagem,
                                                C.nome AS categoria FROM produto P INNER JOIN categorias C 
                                                    ON P.categorias_id=C.id ORDER BY P.id DESC LIMIT $first_item, $quantity");

            $query->execute();

            $list_products = $query->fetchAll(PDO::FETCH_ASSOC);

            return $list_products;

        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function list_page_products($table_name, $first_item, $quantity){
        try{
            $query = $this->pdo->prepare("SELECT * FROM $table_name ORDER BY id DESC 
                                            LIMIT $first_item, $quantity");
            $query->execute();

            $products = $query->fetchAll(PDO::FETCH_ASSOC);

            return $products;

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    //pega a quantidade de paginas que vai ter
    public function quantity_pages($results_per_page, $table_name){
        try{
            $query = $this->pdo->prepare("SELECT COUNT(id) AS product_quantity FROM $table_name");
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
    //**********FIM QUERIES DE PAGINAÇÃO**********//

    //**********QUERIES DE EXIBIÇÃO DE PRODUTO PARA USUARIO**********//
    public function selectProdutoPorId($id)
    {
        try{
            $query = $this->pdo->prepare("SELECT P.nome, P.valor, P.info, P.descricao, P.imagem,
                                                C.nome AS categoria FROM produto P INNER JOIN categorias C 
                                                ON P.categorias_id=C.id WHERE P.id = ?");
            $query->bindValue(1,$id);
            $query->execute();

            $product = $query->fetch(PDO::FETCH_ASSOC);
            return $product;

        }catch (Exception $e){
            die($e->getMessage());
        }
    }
}
