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

<<<<<<< HEAD
        //QUERY DE USUARIOS
    public function selectUsuarios()
    {
        try{
            $query = $this->pdo->prepare("SELECT * FROM usuarios");
            $query->execute();
            $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

            return $usuarios;
=======
    //QUERY DE CATEGORIAS
    public function selectCategorias()
    {
        try{
            $query = $this->pdo->prepare("SELECT * FROM categorias");
            $query->execute();
            $categorias = $query->fetchAll(PDO::FETCH_ASSOC);
            
            return $categorias;
>>>>>>> 75645665b15c75e1209e8b60c72e81699539fe81
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

<<<<<<< HEAD
    public function insertUsuarios(string $name)
    {

        try {
            $query = $this->pdo->prepare("INSERT INTO usuarios (Nome) VALUE (?)");
=======
    public function insertCategoria(string $name)
    {
        
        try {
            $query = $this->pdo->prepare("INSERT INTO categorias (Nome) VALUE (?)");
>>>>>>> 75645665b15c75e1209e8b60c72e81699539fe81
            $query->bindValue(1, $name);
            $query->execute();
        }
        catch(Exception $e) {
            die($e->getMessage());
        }
    }

<<<<<<< HEAD
    public function editUsuario(string $id, string $name)
    {
        try {
            $query = $this->pdo->prepare("UPDATE usuarios SET Nome = ? WHERE id=?");
=======
    public function editCategoria(string $id, string $name)
    {
        try {
            $query = $this->pdo->prepare("UPDATE categorias SET Nome = ? WHERE id=?");
>>>>>>> 75645665b15c75e1209e8b60c72e81699539fe81
            $query->bindValue(1, $name);
            $query->bindValue(2, $id);
            $query->execute();
        }
        catch(Exception $e) {
            die($e->getMessage());
        }
    }

<<<<<<< HEAD
    public function deleteUsuarios(string $id)
    {
        try {
            $query = $this->pdo->prepare("DELETE FROM usuarios WHERE id = ?");
=======
    public function deleteCategoria(string $id)
    {
        try {
            $query = $this->pdo->prepare("DELETE FROM categorias WHERE id = ?");
>>>>>>> 75645665b15c75e1209e8b60c72e81699539fe81
            $query->bindValue(1, $id);
            $query->execute();
        }
        catch(Exception $e) {
            die($e->getMessage());
        }
    }
<<<<<<< HEAD
    //FIM DO QUERY DE USUARIOS
=======
    //FIM DO QUERY DE CATEGORIAS
>>>>>>> 75645665b15c75e1209e8b60c72e81699539fe81

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
      
<<<<<<< HEAD
    } 
}
=======
    }
}
>>>>>>> 75645665b15c75e1209e8b60c72e81699539fe81
