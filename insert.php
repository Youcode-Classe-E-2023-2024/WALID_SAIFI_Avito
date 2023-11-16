<?php
include 'creation.php';

// Connexion à la base de données pour insérer les données du formulaire
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}
// Récupérer les données du formulaire
$titre = $_POST['titre'];
$description = $_POST['description'];
$prix = $_POST['prix'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$insertSql = "INSERT INTO annonces (titre, Description, prix, telephone, email) VALUES ('$titre', '$description','$prix','$telephone','$email')";
if ($conn->query($insertSql) === TRUE) {
    echo "New record created successfully";
    header("Location: ajouter.php");
} else {
    echo "Error: " . $insertSql . "<br>" . $conn->error;
}
$conn->close();

?>
