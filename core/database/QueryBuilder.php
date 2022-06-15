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
                    $query = $this->pdo->prepare("SELECT P.id, P.nome, P.valor, P.info, P.descricao, P.imagem, C.nome AS categoria FROM produto P INNER JOIN categorias C ON P.categorias_id=C.id");
                    $query->execute();
                    $produtos = $query->fetchAll(PDO::FETCH_ASSOC);

                    return $produtos;
                }
                catch(Exception $e){
                    die($e->getMessage());
                }
            }

            public function pesquisaProdutos($nome){
                try{
                    $query = $this->pdo->prepare("SELECT P.id, P.nome, P.valor, P.info, P.descricao, P.imagem, C.nome AS categoria FROM produto P INNER JOIN categorias C ON P.categorias_id=C.id WHERE P.nome LIKE '%$nome%'");
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
                    $query = $this->pdo->prepare("INSERT INTO produto (nome, valor, info, descricao, categorias_id, imagem) VALUE (:nome, :valor, :info, :descricao, :categorias_id, :imagem)");
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

    public function searchCategoria($nome){
        try{
            $query = $this->pdo->prepare("SELECT * FROM categorias WHERE nome LIKE '%$nome%'");
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
    //FIM DO QUERY DE CATEGORIAS

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

    //INICIO DO QUERY DE LOGIN

    public function autenticacao($email, $senha){
        try{
            $query = $this->pdo->prepare("SELECT id FROM usuarios WHERE email = ? AND senha = ?");
            $query->bindValue(1, $email);
            $query->bindValue(2, $senha);
            $query->execute();
            $verifica = $query->fetch(PDO::FETCH_ASSOC);
            return $verifica;
        } catch(Exception $e){
            die($e->getMessage());
        }
    }


    //FIM DO QUERY DE LOGIN

    //QUERIE BACK_END SIDEBAR
    public function getUserById($id)
    {
        try {
            $query = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
            $query->bindValue(1,$id);
            $query->execute();

            $user = $query->fetch(PDO::FETCH_ASSOC);

            return $user;
        }catch (Exception $e){
            die($e->getMessage());
        }

    }

    public function editAdmin(array $user){
        try{
            $query = $this->pdo->prepare("UPDATE usuarios SET nome = ?, email = ?, senha = ?, imagem = ? WHERE id = ?");
            $query->bindValue(1, $user["nome"]);
            $query->bindValue(2, $user["email"]);
            $query->bindValue(3, $user["senha"]);
            $query->bindValue(4, $user["imagem"]);
            $query->bindValue(5, $user["id"]);

            $query->execute();

        }catch(Exception $e){
            die($e->getMessage());
        }
    }
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