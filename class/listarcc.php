<?php
class produtos{
	public function cc(){
      global $pdo;
      $array=[];
      $sql=$pdo->prepare("SELECT * FROM coderphp_cc ORDER BY ID DESC");

      $sql->execute();
      if($sql->rowCount() > 0){
         $array = $sql->fetchAll();

      }

      return $array;
   }


}
















?>