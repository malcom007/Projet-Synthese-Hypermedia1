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
                    <h5 class="title">Terminal</h5>



                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">


                            <thead class=" text-primary">
                            <th>
                                Numero terminal
                            </th>

                            <th>
                                Etat
                            </th>
                            <th class="text-right">
                                Date de l'etat
                            </th>
                            </thead>
                            <tbody>
                            <?php
                            require_once ('../../modele/classes/transporteur/TerminalEntrepriseDAO.php');

                            $dao = new TerminalEntrepriseDAO();
                            $test = $dao->findAllByIdEntreprise('h545gf');

                            if (empty($test)){
                                echo "Aucune données";
                            }else{
                                foreach ($test as $item){
                                    $item->getIdTerminal();



                                }
                            }
                            ?>
                            <tr>
                                <td>
                                  <?php echo $item->getIdTerminal(); ?>
                                </td>

                                <td>
                                    <?php if($item->getStatut()==1){
                                        echo "active";
                                    }else{ echo "inactive";} ?>
                                </td>
                                <td class="text-right">
                                    <?php echo $item->getDateModification(); ?>
                                </td>
                            </tr>

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>