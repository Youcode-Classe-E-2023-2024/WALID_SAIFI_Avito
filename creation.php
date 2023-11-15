<?php
$servername = "localhost"; 
$username = "root";
$password = ""; 
$dbname = "Annonce_avito"; 
/**
 * Établit une connexion à la base de données MySQL et crée une base de données si elle n'existe pas.
 *
 * 
 * @param string $servername Le nom du serveur MySQL.
 * @param string $username Le nom d'utilisateur MySQL.
 * @param string $password Le mot de passe MySQL.
 * @param string $dbname Le nom de la base de données à créer ou à utiliser.
 * @return void
 */
function connection_data($servername, $username, $password,$dbname){
$conn = new mysqli($servername, $username, $password);
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
$test_bd=$conn->query($sql);
if ($test_bd) {
   //echo "La base de données '$dbname' a été créée avec succès.\n";
} else {
    echo "Erreur lors de la création de la base de données : " . $conn->error;
}
$conn->close();
}
/**
 * Établit une connexion à une base de données existante et crée une table 'annonces' si elle n'existe pas.
 *
 * 
 * @param string $servername Le nom du serveur MySQL.
 * @param string $username Le nom d'utilisateur MySQL.
 * @param string $password Le mot de passe MySQL.
 * @param string $dbname Le nom de la base de données à utiliser.
 * @return void
 */
function create_table($servername, $username, $password, $dbname){
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "CREATE TABLE IF NOT EXISTS annonces (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(85) NOT NULL,
    description TEXT NOT NULL,
    prix DECIMAL(10, 2) NOT NULL,
    telephone vARCHAR(85) NOT NULL,
    email vARCHAR(85) NOT NULL
)";
$test_table=$conn->query($sql);
if ($test_table){
   // echo "La table 'annonces' a été créée avec succès.\n";
} else {
    echo "Erreuqueryr lors de la création de la table 'annonces' : " . $conn->error;
}
$conn->close();
}
connection_data($servername, $username, $password,$dbname);
create_table($servername, $username, $password, $dbname);
?>
