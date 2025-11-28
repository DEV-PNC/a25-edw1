<?php
$host = "localhost:3306"; 
$db = "test_connect";
$user = "root";
$pass = "admin";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connexion réussie ! <br>";

    $stmt = $pdo->query("SELECT * FROM users");
    foreach ($stmt as $row) {
        echo $row['username'] . " - " . $row['email'] . "<br>";
    }

} catch(PDOException $e) {
    die("Erreur PDO : " . $e->getMessage());
}

?>