<?php
include 'creation.php';
// Récupérer les données du formulaire
$titre = $_POST['titre'];
$description = $_POST['description'];
$prix = $_POST['prix'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$insertSql = "INSERT INTO annonces (titre, description,prix,telephone,email) VALUES ('$titre', '$description','$prix','$telephone','$email')";
if ($conn->query($insertSql) === TRUE) {
    echo "New record created successfully";
    header("Location: ajouter.php");
} else {
    echo "Error: " . $insertSql . "<br>" . $conn->error;
}
$conn->close();
?>
