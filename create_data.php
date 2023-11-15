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
   // echo "La base de données '$dbname' a été créée avec succès.\n";
} else {
    echo "Erreur lors de la création de la base de données : " . $conn->error;
}

$conn->close();
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion à la nouvelle base de données a échoué : " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS annonces (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    prix DECIMAL(10, 2) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
   // echo "La table 'annonces' a été créée avec succès.\n";
} else {
    echo "Erreur lors de la création de la table 'annonces' : " . $conn->error;
}
$conn->close();

?>
