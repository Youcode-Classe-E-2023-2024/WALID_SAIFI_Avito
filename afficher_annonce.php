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
    <h2>La list des Annonce.</h2>
   
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
            require_once("creation.php");
            $selectSql = "SELECT * FROM annonces";
            $result = $conn->query($selectSql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["titre"] . "</td>";
                    echo "<td>" . $row["Description"] . "</td>";
                    echo "<td>" . $row["prix"] . "</td>";
                    echo "<td>" . $row["telephone"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>";
                    echo "<a href='modifier.php?id=" . $row["id"] . "'><button style='background-color:#4CAF50; color: white; padding: 8px 12px; margin-right: 10px; border: none; cursor: pointer; font-size: 14px; border-radius: 4px;'>Modifier</button>";
                    echo "<a href='supprimer.php?id=" . $row["id"] . "'> <button style='background-color: #ff0000; color: white; padding: 8px 12px; border: none; cursor: pointer; font-size: 14px; border-radius: 4px;'>Supprimer</button>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>Aucune annonce trouvée</td></tr>";
            }
            

            $conn->close();
            ?>
      </tbody>
    </table>
  </div>

</body>
</html>
