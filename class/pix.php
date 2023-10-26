<?php

class pix{
	public function Pixon($id){
		global $pdo;
		$array = [];
		$sql=$pdo->prepare("SELECT coderphp_produtos.id,coderphp_pix.id,coderphp_pix.idproduto,coderphp_pix.chavepix  FROM coderphp_produtos  INNER JOIN coderphp_pix  
ON coderphp_pix.idproduto = coderphp_produtos.id WHERE coderphp_pix.idproduto =:idproduto ORDER BY coderphp_pix.id desc");
		$sql->bindValue(":idproduto", $id);
		$sql->execute();
		if($sql->rowCount() > 0){
          $array = $sql->fetchAll();
		}
		return $array;
	}
}