<?php
include __DIR__.'/../config/config.php';

global $pdo;

if(isset($_GET['id'])):

	$visitas = 1;
	$id = addslashes(htmlspecialchars_decode($_GET['id']));
	$sql=$pdo->prepare("INSERT INTO  visitas_produto SET id_produto = :id_produto, visita = :visita");
	$sql->bindValue(":id_produto", $id);
	$sql->bindValue(":visita", $visitas);
	$sql->execute();
endif;



$array = [];
$sql=$pdo->prepare("SELECT * FROM coderphp_produtos WHERE id = :id");
$sql->bindValue(":id", @$id);
$sql->execute();
if($sql->rowCount() > 0){
	$array = $sql->fetchAll();
}

foreach($array as $coderphp001):
$valor_total = $coderphp001['precofake'];
	 	$quantidade_parc = 12;
	 	number_format($valor_total, 2, ',', '.');

	 	$valor_parc = $valor_total / $quantidade_parc;
 $controle = 1;
  $soma_valor_parc = 0;
   $data_atual = new DateTime();
 while ($controle <= $quantidade_parc) {

        // Somar um mês na data
        $data_atual->add(new DateInterval("P1M"));

        // Acessa o IF quando é última parcela para corrigir o valor da compra
        if ($controle == $quantidade_parc) {

            // Utilizar a soma das parcelas já impressa e subtrair do valor total da compra para obter o valor a última parcela e corrigir a diferença
            $valor_ultima_parc = $valor_total - $soma_valor_parc;

            // Converter o valor da parcela para o formato Real separado pela virgula
            // echo "Valor da parcela " . number_format($valor_ultima_parc, 2, ',', '.') . "<br>";

            // Somar o valor das parcelas
            $soma_valor_parc += number_format($valor_ultima_parc, 2, '.', '');
        } else {
            // Converter o valor da parcela para o formato Real separado pela virgula
            // echo "Valor da parcela " . number_format($valor_parc, 2, ',', '.') . "<br>";

            // Somar o valor das parcelas
            $soma_valor_parc += number_format($valor_parc, 2, '.', '');
        }

        //var_dump($data_atual);
        // Converter a data
        // echo "Data de vencimento: " . $data_atual->format('d/m/Y') . "<br><br>";

        // Incrementar a variável após imprimir a parcela
        $controle++;
    }







	$_SESSION['id'] = $coderphp001['id'];
	$_SESSION['idproduto'] = $coderphp001['idproduto'];
	$_SESSION['title'] = $coderphp001['title'];
	$_SESSION['preco'] =  number_format($coderphp001['preco'], 2,",",".");
	$_SESSION['precofake'] =    number_format($coderphp001['precofake'], 2,",",".");
	$_SESSION['fotos1'] = $coderphp001['fotos1'];
	$_SESSION['fotos2'] = $coderphp001['fotos2'];
	$_SESSION['fotos3'] = $coderphp001['fotos3'];
	$_SESSION['fotos4'] = $coderphp001['fotos4'];
	$_SESSION['fotos5'] = $coderphp001['fotos5'];
	$_SESSION['descricao'] = $coderphp001['descricao'];

endforeach;








?>
