<?php

require_once 'creation.php';
/**
 * Récupérer l'ID de l'annonce à supprimer depuis les paramètres GET
 */
$id = $_GET["id"];
/**
 * Construire la requête SQL pour supprimer l'annonce avec l'ID spécifié
 */

$sql = "DELETE FROM annonces WHERE id = $id";
/**
 *  Exécuter la requête SQL
 */
$res = $conn->query($sql);
/**
 * Vérifier si la requête s'est exécutée avec succès
 */
if ($res) {
    /**
     *  Rediriger vers la page d'affichage des annonces après la suppression
     */
    header("Location: afficher_annonce.php");
    exit();
} else {
    /**
     *Afficher un message d'erreur en cas d'échec de l'exécution de la requête
     */
    echo "Erreur lors de l'exécution de la requête !";
}

$conn->close();

?>
