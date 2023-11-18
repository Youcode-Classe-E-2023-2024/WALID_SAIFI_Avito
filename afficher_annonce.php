<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Afficher Annonce</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }
    h2 {
    text-align: center;
    padding: 20px; 
    background-color: #4CAF50; 
    border-radius: 5px; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
    color: black;
    font-size: 70px;
}
    .navbar {
      overflow: hidden;
      background-color: #4CAF50; 
      position: fixed;
      top: 0;
      width: 100%;
      animation: colorChange 1s infinite alternate; 
    }

    .navbar a {
      float: left;
      display: block;
      color: #ffffff; 
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    .navbar a:hover {
      background-color: #ddd;
      color: black;
    }
    @keyframes colorChange {
      from {
        background-color: #ff0000;
      }
      to {
        background-color: #ff6666; 
      }
    }

    .content {
      padding: 60px 16px; 
    }
    table {
      width: 80%;
      margin: auto;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #4CAF50; 
      color: white;
    }

  </style>
</head>
<body>

  <div class="navbar">
    <a href="#home">Home</a>
    <a href="ajouter.php">Ajouter une annonce</a>
    <a href="afficher_annonce.php">Afficher les annonces</a>
  </div>

  <div class="content">
    <h2>Liste des Annonces</h2>
   
    <table>
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Titre</th>
          <th scope="col">Description</th>
          <th scope="col">Prix</th>
          <th scope="col">Téléphone</th>
          <th scope="col">Email</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
            /**
            * Ce script affiche toutes les annonces dans un tableau HTML avec des liens
            * de modification et de suppression.
            */

            require_once("creation.php");
            /**
             * Définir la requête SQL pour sélectionner toutes les annonces
             */
            $selectSql = "SELECT * FROM annonces";
            /**
             * Exécuter la requête SQL
             */
            $result = $conn->query($selectSql);
               /**
                * Vérifier si des annonces ont été trouvées
                */
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  /**
                   * Parcourir les résultats de la requête
                   * est afficher chaque annonce dans une ligne de tableau HTML
                   */
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["titre"] . "</td>";
                    echo "<td>" . $row["Description"] . "</td>";
                    echo "<td>" . $row["prix"] . "</td>";
                    echo "<td>" . $row["telephone"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>";
                    /**
                     * Ajouter des liens pour la modification et la suppression avec des boutons 
                     */
                    echo "<a href='modifier.php?id=" . $row["id"] . "'><button style='background-color:#4CAF50; color: white; padding: 8px 12px; margin-right: 10px; border: none; cursor: pointer; font-size: 14px; border-radius: 4px;'>Modifier</button>";
                    echo "<a href='supprimer.php?id=" . $row["id"] . "'> <button style='background-color: #ff0000; color: white; padding: 8px 12px; border: none; cursor: pointer; font-size: 14px; border-radius: 4px;'>Supprimer</button>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
              // Afficher un message si aucune annonce n'est trouvée
                echo "<tr><td colspan='7'>Aucune annonce trouvée</td></tr>";
            }
            $conn->close();
            ?>
      </tbody>
    </table>
  </div>

</body>
</html>
