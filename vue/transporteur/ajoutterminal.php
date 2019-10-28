<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<div  class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Ajouter Terminal</h5>
                </div>
                <?php
                require_once('../../modele/config/Autoloader.php');



                $textBouton = "ajouter";
                $dao = TransporteurDAO::find('h545gf');
                $test = $dao;
                $Dao = TransporteurDAO::findAdresse('h545gf');

                $Adres = $Dao;
                if (empty($Adres)){
                    echo "Aucune données";
                }else{
                    foreach ($Adres as $item){

                         $item->getRue();

                    }
                }
                ?>
                <div class="card-body">
                    <form  method="post" >
                        <div class="row">
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label>Id Entreprise</label>

                                    <input type="text" class="form-control" name="idTrans" disabled="" placeholder="Username" value="<?php if (empty($test)){
                                        echo "Aucune données";
                                    }else{
                                        foreach ($test as $item){
                                            echo $item->getIdTransporteur();

                                        }
                                    }?>">
                                </div>
                            </div>
                            <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    <label>Raison Social </label>
                                    <input type="text" class="form-control" disabled="" placeholder="Company" value="<?php echo $item->getRaisonSocial(); ?>">
                                </div>
                            </div>

                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" disabled=""  placeholder="Email" value="Onicedimukey@gmail.com">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" disabled="" placeholder="Home Address" value="<?php  if (empty($Adres)){
                                        echo "Aucune données";
                                    }else{
                                        foreach ($Adres as $item){

                                           echo $item->getRue(); echo " / " ;echo $item->getQuartier();


                                        }
                                    } ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" disabled=""  placeholder="City" value="<?php echo $item->getVille(); ?>">
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" disabled=""  placeholder="Country" value="<?php echo $item->getPays(); ?>">
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Postal Code</label>
                                    <input type="text" class="form-control" disabled="" placeholder="ZIP Code" value="<?php echo $item->getCodePostal(); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-3 pl-1">
                                <div class="form-group">
                                    <label>Id du Terminal</label>
                                    <input type="text" name="idTerminal" class="form-control"  placeholder="id"   >
                                </div>
                            </div>
                            <div class="col-md-3 pl-1">
                                <div class="form-group">
                                    <label>Entre un Login</label>
                                    <input type="text" class="form-control" name="login" placeholder="login" >
                                </div>
                            </div>
                            <div class="col-md-3 pl-1">
                                <div class="form-group">
                                    <label>Mot de Passe</label>
                                    <input type="text" class="form-control" name="pswrd" placeholder="PassWord" >
                                </div>
                            </div>
                                <div class="col-md-3 pl-1">
                                    <div class="form-group">
                                        <label>Mot de Passe</label>
                                        <input type="text" class="form-control" name="pswrd2" placeholder=" Entre a nouveau PassWord" >
                                    </div>
                                </div>
                        </div>
                        <div class="row">

                            <div class="col-md-3">
                                <input type="hidden" name="action" value="AjouterTerminal">
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
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.18.6/dist/sweetalert2.all.min.js"></script>

<script>
    function swalsuuces() {
        Swal.fire({
            position: 'top-end',
            type: 'success',
            title: 'terminal ajouter  ',
            showConfirmButton: false,
            timer: 1500
        });
    }
</script>
<script>

    nowuiDashboard = {
        misc: {
            navbar_menu_visible: 0
        },

        showNotification: function(from, align) {
            color = 'primary';

            $.notify({
                icon: "fas fa-headset",
                message: "Welcome to <b>Now Ui Dashboard</b> - a beautiful freebie for every web developer."

            }, {
                type: color,
                timer: 8000,
                placement: {
                    from: from,
                    align: align
                }
            });
        }


    };
</script>

</body>
</html>