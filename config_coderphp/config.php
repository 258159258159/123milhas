<?php
$host = '123milhas-server.mysql.database.azure.com';
$dbname = '123milhas-database';
$username = 'jrxpmabhcf';
$password = '0V265CP6L6FKHP0D$';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'FALHOU: ' . $e->getMessage();
    exit;
}
?>
