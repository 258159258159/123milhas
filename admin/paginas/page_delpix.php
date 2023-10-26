<?php

include __DIR__.'/../../config/config.php';
if(isset($_GET['id']) && !empty($_SESSION['usuarioId'])):
$id = $_GET['id'];

global $pdo;
$sql=$pdo->prepare("delete from coderphp_pix  WHERE id = '$id'");
$sql->execute();
endif;


?>

<script type="text/javascript">
	window.location.href='pix';
</script>