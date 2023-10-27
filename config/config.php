<?php
$host = '123milhas-server.mysql.database.azure.com';
$dbname = '123milhas-database';
$username = 'jrxpmabhcf';
$password = '@Sbo258159';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'FALHOU: ' . $e->getMessage();
    exit;
}
?>
