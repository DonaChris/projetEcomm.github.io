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

$sql = "SELECT * FROM utilisateurs WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hashedPassword = $row['password'];
    
    if (password_verify($password, $hashedPassword)) {
        echo "Connexion réussie.";
    } else {
        echo "Mot de passe incorrect.";
    }
} else {
    echo "Utilisateur non trouvé.";
}

$conn->close();

?>
