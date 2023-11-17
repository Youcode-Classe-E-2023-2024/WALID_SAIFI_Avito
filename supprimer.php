<?php

require_once 'creation.php';
$conn = new mysqli($servername, $username, $password, $dbname);

$id = $_GET["id"];

$sql = "DELETE FROM annonces WHERE id = $id";

$res = $conn->query($sql);

if ($res) {
    header("Location: afficher_annonce.php");
    exit();
} else {
    echo "Erreur lors de l'exécution de la requête !";
}

$conn->close();

?>
