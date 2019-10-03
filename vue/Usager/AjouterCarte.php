<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Bootstrap Theme Company Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        .jumbotron {
            background-color: #f4511e;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="jumbotron text-center">
    <h1>SWIPandGO</h1>
    <p>ENTREZ LE NUMERO DE VOTRE CARTE</p>
    <form class="form-inline" method="post" action="../../controleur/ajouterCarte.php">
        <div class="input-group">
            <input type="text" class="form-control" size="50" placeholder="Numero de la carte" name="ajouterCarte"
                   required>
            <div class="input-group-btn">
                <button type="button" class="btn btn-danger" name="btnAjouterCarte">Ajouter</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
<?php

?>