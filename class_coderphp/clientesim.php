<?php 
class Clientes{

	public function clienteSIM($idproduto,$user,$senha,$nome,$cep,$uf,$cidade,$bairro,$rua,$numero,$telefone){

		global $pdo;
		$sql=$pdo->prepare("INSERT INTO coderphp_cliente SET idproduto =:idproduto, email=:email, senha=:senha, nome=:nome, cep = :cep, uf=:uf, cidade=:cidade, bairro =:bairro,
			rua=:rua, numero=:numero, telefone=:telefone");


		$sql->bindValue(":idproduto", $idproduto);
		$sql->bindValue(":email", $user);
		$sql->bindValue(":senha", $senha);
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":cep", $cep);
		$sql->bindValue(":uf", $uf);
		$sql->bindValue(":cidade", $cidade);
		$sql->bindValue(":bairro", $bairro);
		$sql->bindValue(":rua", $rua);
		$sql->bindValue(":numero", $numero);
		$sql->bindValue(":telefone", $telefone);

		$sql->execute();

	}




}