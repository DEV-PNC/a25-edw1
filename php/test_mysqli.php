<?php
$host = "localhost";
$db = "test_connect";

$user = "root";
$pass = "admin";

$conn = new mysqli($host, $user, $pass, $db, "3306");

if($conn->connect_error) {
    die("Connexion échouée : $conn->connect_error");
}

echo "Connexion réussie !<br>";

$result = $conn->query("SELECT * FROM users");

while ($row = $result->fetch_assoc()) {
    echo $row['username'] . " - " . $row['email'] . "<br>";
}

$conn->close();

?>