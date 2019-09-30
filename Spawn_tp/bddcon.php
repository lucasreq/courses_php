<?php
$dsn = 'mysql:dbname=u328580268_spawn;host=localhost;charset=utf8';
$user = 'u328580268_root';
$password = 'baterie1';
try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
?>