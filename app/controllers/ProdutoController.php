<?php

namespace App\Controllers;


use App\Core\App;

class ProdutoController
{
    public function getPage():void
    {
        $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

        if(isset($id)){
            $produto = $this->getProduct($id);
            $arr = explode("\n",$produto["info"]);
            if($produto) {
                require __DIR__ . '/../views/site/view_produto.view.php';
                die();
            }
        }

        header("Location:Home");
    }

    public function getProduct($id){
        return App::get("database")->selectProdutoPorId($id);
    }
}