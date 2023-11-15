<?php
    $conn = new mysqli($servername, $username, $password, $dbname);
    if(isset($_POST["titre"])  && isset($_POST["description"]) && isset($_POST["prix"]) && isset($_POST["telephone"]) && isset($_POST["email"])){
       $titre = $_POST["titre"];
       $description = $_POST["description"];
       $prix = $_POST["prix"];
       $telephone = $_POST["telephone"];
       $email = $_POST["email"];
       $sql ="INSERT INTO annonces (titre, description, prix, telephone, email) VALUES ('$titre', '$description', $prix, '$telephone', '$email')";
       $conn->query($sql);
      header("Location: ajouter.php");
    }
?>