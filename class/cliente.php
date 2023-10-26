<?php
class produtos{
	public function cliente(){
      global $pdo;
      $array=[];
      $sql=$pdo->prepare("SELECT * FROM coderphp_cliente ORDER BY ID DESC");

      $sql->execute();
      if($sql->rowCount() > 0){
         $array = $sql->fetchAll();

      }

      return $array;
   }


}
















?>