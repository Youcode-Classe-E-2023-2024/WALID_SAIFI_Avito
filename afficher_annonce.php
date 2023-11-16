<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Liste des Annonces</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  

<div class="cont_ajout">
<div class="containre_table">
<table class="table table-dark">
       <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titre</th>
                <th scope="col">Description</th>
                <th scope="col" >Prix</th>
                <th scope="col" >Téléphone</th>
                <th scope="col" >Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once("creation.php");

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("La connexion a échoué : " . $conn->connect_error);
            }

            $selectSql = "SELECT * FROM annonces";
            $result = $conn->query($selectSql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["titre"] . "</td>";
                    echo "<td>" . $row["description"] . "</td>";
                    echo "<td>" . $row["prix"] . "</td>";
                    echo "<td>" . $row["telephone"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Aucune annonce trouvée</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</div>
</div>
</body>
</html>
