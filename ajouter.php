
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ajouter Annonce</title>
</head>
<body>
    <div class="cont_ajout">
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
</div>
</body>
</html>