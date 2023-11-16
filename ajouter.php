
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-Zt4Jx1qWlKXNlH5+PiMqYYBpn6F5iDz1TK7WdA0qDEIHxAg/6AebVyfrt7paD7kp" crossorigin="anonymous"></script>
    <title>Ajouter Annonce</title>
</head>
<body class="container_bady">
<div class="container">
        <div class="header">
            <h2>Ajouter un Annonce</h2>
        </div>
        <form class="form" id="form" method="post" action="insert.php">
            <div class="form-control ">
                <label for="">Titre de Annonce</label>
                <input type="text" name="titre" >

            </div>
           
            <div class="form-control ">
                <label for=""> Description du produit/service :</label>
                <input type="text"  name="description">
            </div>
            <div class="form-control ">
                <label for="">Prix:</label>
                <input type="text"  name="prix">
            </div>
            <div class="form-control ">
                <label for="">Telephone:</label>
                <input type="text"  name="telephone">
            </div>
            <div class="form-control ">
                <label for="">Email:</label>
                <input type="email"  name="email">
            </div>
            <button type="submit"> <i class="fas fa-user-plus"></i> S'inscrire</button>
            </form>
            </div>
    </div>
</body>
</html>