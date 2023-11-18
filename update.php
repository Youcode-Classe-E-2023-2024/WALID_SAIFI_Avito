<?php
include_once "creation.php";
 /**
  * Récupérer les données du formulaire POST
  */
    $id = $_POST["id"];
    $titre = $_POST["titre"];
    $description = $_POST["description"];
    $prix = $_POST["prix"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
  /**
   * Construire la requête SQL pour mettre à jour l'annonce avec les nouvelles données
   */
    $sql = "UPDATE annonces SET titre='$titre', Description='$description', prix=$prix, telephone='$telephone', email='$email' WHERE id=$id";

    $res = mysqli_query($conn, $sql);

    if ($res) {
        header("Location: afficher_annonce.php");
        exit();
    }

?>
