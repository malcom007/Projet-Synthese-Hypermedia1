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
                require_once ('../../modele/classes/transporteur/TerminalEntreprise.php');
                require_once ('../../modele/classes/transporteur/TerminalEntrepriseDAO.php');
                require_once ('../../modele/classes/transporteur/TransporteurDAO.php');
                require_once ('../../modele/classes/transporteur/Transporteur.php');
                require_once ('../../modele/classes/adresse/Adresse.php');

                $dao = new TransporteurDAO();
                $daoA= new TerminalEntrepriseDAO();
                $id = "";
                $login="";
                $pswrd="";
                $textBouton = "ajouter";
                if (ISSET($_REQUEST['action'])) {
                    if (ISSET($_REQUEST["bnok"])) {
                        $idTermininal = TerminalEntrepriseDAO::findById($_REQUEST['id']);
                        $idEntreprise = TransporteurDAO::find('h545gf');
                        if (empty($idTermininal)) {
                            throw new Exception("Aucun terminal trouvé avec ce ID");
                        }
                        $idTermininal = $idTermininal[0]->getIdTerminal();

                        if (empty($idEntreprise)) {
                            throw new Exception("Aucun Transport trouvé avec ce ID");
                        }
                        $idEntreprise = $idEntreprise[0]->getIdTransporteur();
                        var_dump($idEntreprise);
                        $monTerminal = new TerminalEntreprise();
                        $monTerminal->setIdTerminal($idTermininal);
                        $monTerminal->setIdEntreprise($idEntreprise);
                        $monTerminal->setLogin($_REQUEST['login']);
                        $monTerminal->getPassword($_REQUEST['pswrd']);
                        $daoA->addTerminal($monTerminal);
                        var_dump($idEntreprise);
                    }
                }
                $test = $dao->find('h545gf');

                if (empty($test)){
                    echo "Aucune données";
                }else{
                    foreach ($test as $item){
                        $item->getIdTransporteur();
                        $item->getRaisonSocial();
                    }
                }
                $Adres = $dao->findAdresse('h545gf');
                if (empty($test)){
                    echo "Aucune données";
                }else{
                    foreach ($Adres as $item){

                        echo $item->getRue();

                    }
                }
                ?>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label>Id Entreprise</label>

                                    <input type="text" class="form-control" disabled="" placeholder="Username" value="<?php echo $item->getIdTransporteur();?>">
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
                                    <input type="text" class="form-control" disabled="" placeholder="Home Address" value="3540 rue Masson ">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" disabled=""  placeholder="City" value="kinshasa">
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" disabled=""  placeholder="Country" value="RDC">
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Postal Code</label>
                                    <input type="text" class="form-control" disabled="" placeholder="ZIP Code" value="H1X-1R9">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Id du Terminal</label>
                                    <input type="text" class="form-control"  placeholder="id" value="<?=$id?>"  >
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Entre un Login</label>
                                    <input type="text" class="form-control"  placeholder="login" value="<?=$login?>"  >
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Mot de Passe</label>
                                    <input type="text" class="form-control" placeholder="PassWord" value="<?=$pswrd?>" >
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-3">
                                <input class="btn btn-primary btn-block" type="submit" name="bnok" value="<?=$textBouton?>"/>
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
</body>
</html>