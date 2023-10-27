<?php

include __DIR__.'/../../config/config.php';
if(isset($_GET['id'])):
$id = $_GET['id'];
global $pdo;
$sql=$pdo->prepare("delete from  coderphp_cliente WHERE id = '$id'");
$sql->execute();
endif;


?>

<script type="text/javascript">
	window.location.href='cliente';
</script>