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
                    <h5 class="title">Historique</h5>
                    <H6 align="center">Consomation par jour</H6>


                            <?php


                            $date="";

                                $dao = new TerminalCarteDAO();
                                $test = $dao->findbyDateday($_REQUEST['date']);
                                $date=$test->getDateTransaction();


                            ?>
                    <div  id="date" class="form-group row">

                        <label for="example-datetime-local-input" class="col-2 col-form-label">selectionner une date</label>
                        <div class="col-10">
                            <form class="form-horizontal" method="post" action="Historque.php">
                            <input class="form-control" type="date" name="date" value="<?=$date?>" id="date">
                            </form>


                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>
                                Numero Terminal
                            </th>
                            <th>
                                Date
                            </th>

                            <th class="text-right">
                                credit
                            </th>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <?php if (empty($test)){

                                        echo "Aucune données";
                                    }else{
                                        foreach ($test as $item){
                                          echo  $item->getIdTerminal();

                                        }
                                    } ?>
                                </td>
                                <td>
                                    <?php
                                    if (empty($test)){

                                        echo "Aucune données";
                                    }else{
                                    foreach ($test as $item){
                                        echo $item->getDateTransaction();
                                    } }?>
                                </td>

                                <td class="text-right">
                                    <?php
                                    if (empty($test)){

                                        echo "Aucune données";
                                    }else{
                                    foreach ($test as $item){
                                        echo $item->getCredit();
                                    } }?>
                                </td>


                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <H6 align="center">Consomation par Mois</H6>
                    <div class="form-group row">
                        <label for="example-datetime-local-input" class="col-2 col-form-label">selectionner le mois</label>
                        <div class="col-10">
                            <input class="form-control" type="month" value="2019-11" id="example-month-local-input">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <?php
                            require_once ('../../modele/classes/terminal/TerminalCarteDAO.php');

                            $dao = new TerminalCarteDAO();
                            $test = $dao->findbyDateMois('10');
                            ?>
                            <th>
                                Numero Terminal
                            </th>
                            <th>
                                Date
                            </th>

                            <th class="text-right">
                                credit
                            </th>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <?php if (empty($test)){

                                        echo "Aucune données";
                                    }else{
                                        foreach ($test as $item){
                                            echo  $item->getIdTerminal();

                                        }
                                    } ?>
                                </td>
                                <td>
                                    <?php
                                    if (empty($test)){

                                        echo "Aucune données";
                                    }else{
                                        foreach ($test as $item){
                                            echo $item->getDateTransaction();
                                        } }?>
                                </td>

                                <td class="text-right">
                                    <?php
                                    if (empty($test)){

                                        echo "Aucune données";
                                    }else{
                                        foreach ($test as $item){
                                            echo $item->getCredit();
                                        } }?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <H6 align="center">Consomation par année</H6>
                    <div class="form-group row">
                        <label for="example-datetime-local-input" class="col-2 col-form-label">selectionner le mois</label>
                        <div class="col-10">
                            <input class="date-own form-control" type="text" >
                        </div>


                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>
                                Numero Terminal
                            </th>
                            <th>
                                Date
                            </th>

                            <th class="text-right">
                                credit
                            </th>
                            </thead>
                            <?php
                            require_once ('../../modele/classes/terminal/TerminalCarteDAO.php');

                            $dao = new TerminalCarteDAO();
                            $test = $dao->findbyDateAnnee('2019');

                            if (empty($test)){

                                echo "Aucune données";
                            }else{
                                foreach ($test as $item){


                                }
                            }
                            ?>
                            <tbody>
                            <tr>
                                <td>
                                    <?php if (empty($test)){

                                        echo "Aucune données";
                                    }else{
                                        foreach ($test as $item){
                                            echo  $item->getIdTerminal();

                                        }
                                    } ?>
                                </td>
                                <td>
                                    <?php
                                    if (empty($test)){

                                        echo "Aucune données";
                                    }else{
                                        foreach ($test as $item){
                                            echo $item->getDateTransaction();
                                        } }?>
                                </td>

                                <td class="text-right">
                                    <?php
                                    if (empty($test)){

                                        echo "Aucune données";
                                    }else{
                                        foreach ($test as $item){
                                            echo $item->getCredit();
                                        } }?>
                                </td>


                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<script>
    var dateControl = document.querySelector('input[type="date"]');
    //dateControl.value='2019-10-25';

</script>

</body>
</html>