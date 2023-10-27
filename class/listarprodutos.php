<?php
class produtos{
	public function listarProdutos(){
      global $pdo;
      $array=[];
      $sql=$pdo->prepare("SELECT * FROM coderphp_produtos WHERE idusuario = {$_SESSION['usuarioId']} ORDER BY ID DESC");

      $sql->execute();
      if($sql->rowCount() > 0){
         $array = $sql->fetchAll();

      }

      return $array;
   }


   // LISTAR PRODUTO PARA RAIZ DO PRODUTO
   
   public function listarProdutosRaiz(){
    global $pdo;
    $array =[];
    $sql=$pdo->prepare("SELECT * FROM coderphp_produtos ORDER BY ID DESC");
    $sql->execute();
    if($sql->rowCount() > 0){
      $array = $sql->fetchAll();

   }

   return $array;
}

public function homeProduto11(){
  global $pdo;
  $array=[];
  $sql=$pdo->prepare("SELECT  * FROM coderphp_produtos  ORDER BY RAND() LIMIT 8  ");
  $sql->execute();
  if($sql->rowCount() > 0){
   $array = $sql->fetchAll();
}

return $array;
}



}
















?>