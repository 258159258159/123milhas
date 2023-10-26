<?php

include __DIR__.'/../../config/config.php';
if(isset($_GET['id'])):
$id = $_GET['id'];
global $pdo;
$sql=$pdo->prepare("delete from  coderphp_smtp WHERE id = '$id'");
$sql->execute();
endif;


?>

<script type="text/javascript">
	window.location.href='produtos';
</script>