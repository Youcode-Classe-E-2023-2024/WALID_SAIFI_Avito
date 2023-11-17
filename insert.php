<?php
require_once("creation.php");

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}
$titre = $_POST['titre'];
$description = $_POST['description'];
$prix = $_POST['prix'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$insertSql = "INSERT INTO annonces (titre, Description, prix, telephone, email) VALUES ('$titre', '$description','$prix','$telephone','$email')";

if ($conn->query($insertSql) === TRUE) {
    header("Location:afficher_annonce.php");
}

/*$conn->close();
$titre = $_POST['titre'];
$description = $_POST['description'];
$prix = $_POST['prix'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$insertSql = "INSERT INTO annonces (titre, Description, prix, telephone, email) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($insertSql);
if ($stmt === false) {
    die("Erreur de préparation de la requête : " . $conn->error);
}
$stmt->bind_param("ssdss", $titre, $description, $prix, $telephone, $email);
$stmt->execute();
header("Location:afficher_annonce.php");
exit;*/
?>
