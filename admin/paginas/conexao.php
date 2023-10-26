<?php
$host = '123milhas-server.mysql.database.azure.com';
$user = 'jrxpmabhcf';
$senha = '@Sbo258159';
$bancodedados = '123milhas-database';
$conexao = mysqli_init();
mysqli_ssl_set($conexao, NULL, NULL, "BaltimoreCyberTrustRoot.crt.pem", NULL, NULL);
mysqli_real_connect($conexao, $host, $user, $senha, $bancodedados, 3306, MYSQLI_CLIENT_SSL);
?>
