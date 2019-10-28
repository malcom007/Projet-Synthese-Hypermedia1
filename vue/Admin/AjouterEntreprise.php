<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="./js/functions.js"></script>
</head>
<body>
<?php
require_once('../../modele/config/Autoloader.php');
?>
<div  class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Ajouter un entreprise</h5>
                </div>
                <div class="card-body">
                    <form  method="post" action="index.php">
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Raison Social </label>
                                    <input type="text" class="form-control" name="raison" placeholder="Raison social ">
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Telephone</label>
                                    <input type="text" class="form-control" name="tel"  placeholder="Telephone" >
                                </div>
                            </div>

                        </div>
<div>
    <h6 class="title">Adresse</h6>
</div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Numero and Rue </label>
                                    <input type="text" class="form-control" name="rue" placeholder="Numero and rue" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Quartier</label>
                                    <input type="text" class="form-control" name="quartier" placeholder="Quartier" >
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Commune</label>
                                    <input type="text" class="form-control" name="commune" placeholder="Commune" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" name="ville"  placeholder="City" >
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" name="pays" placeholder="Country" >
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Postal Code</label>
                                    <input type="text" class="form-control" name="postal" placeholder="ZIP Code" >
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-3">
                                <input type="hidden" name="action" value="AjouterTransporteur">
                                <input class="btn btn-primary btn-block"  type="submit" name="bnok" />
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-primary btn-block" >Annuler</button>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <?php
    $msgError= ISSET($_REQUEST['msg']);
    if($msgError == 'erreur'){

        ?>
    <script>
        valideCham();
    </script>
    <?php
    }
    ?>
</div>
</body>
</html>