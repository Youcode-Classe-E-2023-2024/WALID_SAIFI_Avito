<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Annonce_avito";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
} else {
    echo "Erreur lors de la création de la base de données : " . $conn->error;
}
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}
$sql = "CREATE TABLE IF NOT EXISTS annonces (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(85) ,
    Description VARCHAR(85) ,
    prix DECIMAL(10, 2) ,
    telephone VARCHAR(85) ,
    email VARCHAR(85)
)";
if ($conn->query($sql) === TRUE) {
   // echo "La table 'annonces' a été créée avec succès.\n";
} else {
    echo "Erreur lors de la création de la table 'annonces' : " . $conn->error;
}



?>