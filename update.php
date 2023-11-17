<?php
include_once "creation.php";

    $id = $_POST["id"];
    $titre = $_POST["titre"];
    $description = $_POST["description"];
    $prix = $_POST["prix"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];

    $sql = "UPDATE annonces SET titre='$titre', Description='$description', prix=$prix, telephone='$telephone', email='$email' WHERE id=$id";

    $res = mysqli_query($conn, $sql);

    if ($res) {
        header("Location: afficher_annonce.php");
        exit();
    }

?>
