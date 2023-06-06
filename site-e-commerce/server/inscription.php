<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "ecom";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Échec de la connexion à la base de données: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirm_password'];

if ($password !== $confirmPassword) {
    die("Les mots de passe ne correspondent pas.");
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO utilisateurs (username, password) VALUES ('$username', '$hashedPassword')";

if ($conn->query($sql) === TRUE) {
    echo "Inscription réussie.";
} else {
    echo "Erreur lors de l'inscription: " . $conn->error;
}

$conn->close();
?>
