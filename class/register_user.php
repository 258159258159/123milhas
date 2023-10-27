<?php
class user{

	public $nome;
	public $cnpjcpf;
	public $telefone;
	public $email;
	public $senha;
	public $cep;
	public $endereco;
	public $bairro;
	public $cidade;
	public $estado;
	public $numero;
	public $bskpass;
	public $statuspg;
	public $pegar_ip;
	public $date;


	public function inserirDados($nome,$cnpjcpf,$telefone,$email,$senha,$cep,$endereco,
		$bairro,$cidade,$estado,$numero,$bskpass,$statuspg,$pegar_ip,$date){

		global $pdo;
		$sql=$pdo->prepare("INSERT INTO registration_user SET nome = :nome, cpfcnpj = :cpfcnpj, telefone = :telefone, email = :email, senha = :senha, cep = :cep, endereco = :endereco, bairro = :bairro,
			cidade = :cidade, estado = :estado, numero = :numero,  modalidade = :modalidade, statuspg = :statuspg, pegar_ip = :pegar_ip, date1 = :date1  ");

		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":cpfcnpj", $cnpjcpf);
		$sql->bindValue(":telefone", $telefone);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", $senha);
		$sql->bindValue(":cep", $cep);
		$sql->bindValue(":endereco", $endereco);
		$sql->bindValue(":bairro", $bairro);
		$sql->bindValue(":cidade", $cidade);
		$sql->bindValue(":estado", $estado);
		$sql->bindValue(":numero", $numero);
		$sql->bindValue(":modalidade", $bskpass);
		$sql->bindValue(":statuspg", $statuspg);
		$sql->bindValue(":pegar_ip", $pegar_ip);
		$sql->bindValue(":date1", $date);
		$sql->execute();

		$_SESSION['cadastro'] = "cadastro realizaddo com sucesso";

	}

// VERIFICAR SE HÁ ALGUM CADASTRO COM ESSE EMAIL

	public function verificarEmail($email,$cnpjcpf){
		global $pdo;
		$array = [];
		$sql=$pdo->prepare("SELECT  * FROM registration_user WHERE email = :email OR cpfcnpj = :cpfcnpj ");
		$sql->bindValue(":email", $email);
		$sql->bindValue(":cpfcnpj", $cnpjcpf);
		$sql->execute();

		if($sql->rowCount() > 0){


			$result = $sql->fetch();

			if($result){
				$_SESSION['email']  = $result['email'];
				$_SESSION['cpfcnpj'] = $result['cpfcnpj'];
			}

		}


	}



}




?>