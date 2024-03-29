<?php


class TerminalDAO{

    /***
     * Methode permettant d'ajouter un terminal en inventaire par les employes de SwipnGo
     * @param $terminalO
     */
    public static function create($terminalO){
        $db = Database::getInstance();

        $request="INSERT INTO terminals (idTerminal,libelle,macAdress,prix) values (:id,:lib,:mac,:price)";

        try{

            //On s'assure que la connexion n'est pas null
            if (is_null($db)){
                throw new PDOException("Impossible d'insérer un terminal");
            }

            //Preparation de la requette SQL pour l'execution(Tableau)
            $pstm = $db->prepare($request);

            $pstm->execute(array(
                ':id' => $terminalO->getIdTerminal(),
                ':lib' => $terminalO->getLibelle(),
                ':mac' => $terminalO->getMacAdresse(),
                ':price' => $terminalO->getPrix()
            ));

            $pstm->closeCursor();

            $pstm= NULL;

            //Deconnexion a la base de donnée
            Database::close();

            ?>
            <script>console.log("Insertion complété du terminal avec l'ID:   <?=$terminalO->getIdTerminal()?>")</script>
            <?php



        }
        catch (PDOException $ex){
?>
            <script>console.log("Error createDAO:  <?= $ex->getMessage()?>")</script>
<?php
        }
    }


    /***
     * Methode permettant de trouver un Terminal par Id et retourne un objet
     * Si on ne fourni pas l'id, alors on retourne une liste de terminaux
     * @param $id
     * @return Terminal|null
     */
    public static function findById2($id=NULL)
    {
        $request="";

        //Si On ne saisit pas l'id, on retourne toute la liste
        if ($id==NULL){
            $request="SELECT transTermi.idTerminal, termi.macAdress, transTermi.statut, transTermi.login, transTermi.password, transpo.RaisonSociale, transpo.idTransporteur FROM Entrepriseterminal as transTermi INNER JOIN terminals as termi on transTermi.idTerminal = termi.idTerminal INNER JOIN transporteurs as transpo on transpo.idTransporteur = transTermi.idEntreprise";
        }
        else
            $request="SELECT transTermi.idTerminal, termi.macAdress, transTermi.statut, transTermi.login, transTermi.password, transpo.RaisonSociale, transpo.idTransporteur FROM Entrepriseterminal as transTermi INNER JOIN terminals as termi on transTermi.idTerminal = termi.idTerminal INNER JOIN transporteurs as transpo on transpo.idTransporteur = transTermi.idEntreprise WHERE login  = :x";

        $termTab= Array();

        $db = Database::getInstance();


        try{

            //On s'assure que la connexion n'est pas null
            if (is_null($db)){
                throw new PDOException("Impossible d'effectuer une requette de recherche verifier la connexion");
            }
            //Preparation de la requette SQL pour l'execution(Tableau)
                $pstmt = $db->prepare($request);

                $pstmt->execute(array(':x' => $id));

                //Parcours de notre pstm tant qu'il y des données
                while ($result = $pstmt->fetch(PDO::FETCH_OBJ)){


                    //Creation d'un terminal
                    $terminal = new TerminalEntreprise();

                    //Transfere des information d'objet vers un tableau
                    $terminal->loadFromObjet($result);



                    //On insere chaque objet a la fin du tableau $termTab
                    array_push($termTab,$terminal);
                }

                $pstmt->closeCursor();
                $pstmt= NULL;


        }
        catch (PDOException $ex){
            ?>
            <!-- Affichage du message d'erreur au console terminal-->
            <script>console.log("Error createDAO:  <?= $ex->getMessage()?>")</script>
            <?php
        }
        return $termTab;




    }
    public static function findById($id=NULL)
    {
        $request="";

        //Si On ne saisit pas l'id, on retourne toute la liste
        if ($id==NULL){
            $request="SELECT * FROM terminals";
        }
        else
            $request="SELECT * FROM terminals  WHERE idTerminal = :x";

        $termTab= Array();

        $db = Database::getInstance();


        try{

            //On s'assure que la connexion n'est pas null
            if (is_null($db)){
                throw new PDOException("Impossible d'effectuer une requette de recherche verifier la connexion");
            }
            //Preparation de la requette SQL pour l'execution(Tableau)
            $pstmt = $db->prepare($request);

            $pstmt->execute(array(':x' => $id));

            //Parcours de notre pstm tant qu'il y des données
            while ($result = $pstmt->fetch(PDO::FETCH_OBJ)){

                //Creation d'un terminal
                $terminal = new Terminal();

                //Transfere des information d'objet vers un tableau
                $terminal->loadFromObjet($result);

                //On insere chaque objet a la fin du tableau $termTab
                array_push($termTab,$terminal);
            }

            $pstmt->closeCursor();
            $pstmt= NULL;


        }
        catch (PDOException $ex){
            ?>
            <!-- Affichage du message d'erreur au console terminal-->
            <script>console.log("Error createDAO:  <?= $ex->getMessage()?>")</script>
            <?php
        }
        return $termTab;




    }

    /***
     * Methode permettant de supprimer un terminal, réserver au SyperAdmin
     * @param null $terminalObjet
     */
    public static function delete($terminalObjet){

        $request="DELETE FROM terminals WHERE idTerminal=:id";



        $db = Database::getInstance();

        try {
            if (is_null($terminalObjet)){
                throw new PDOException("Aucun parametre fourni DAO ");
                ?>
                <!-- Affichage du message d'erreur au console terminal-->
                <script>console.log("Impossible de supprimer, aucun parametre")</script>
                <?php
            }else{
                //Preparation de la requette SQL pour l'execution(Tableau)
                $pstm=$db->prepare($request);
                //Execution de la requette préparer
                $pstm->execute(array(":id"=>$terminalObjet->getIdTerminal()));

                //On arret le curseur
                $pstm->closeCursor();
                //On vide la variable
                $pstm = null;

                //On ferme la connexion
                Database::close();
            }


            
        }
        catch (PDOException $ex){
            ?>
            <script> console.log("Impossible de supprimer <?= $ex->getMessage()?>")</script>
            <?php
        }


    }

    /***
     * Methode permettant de faire une mise d'un terminal
     * @param $terminalOb
     */
    public static function update($terminalOb){
        $request="UPDATE terminals SET libelle=:lib, macAdress=:mac, prix=:prix, dateModif=NOW() WHERE idTerminal=:id";

        $db=Database::getInstance();

        try {
            //Preparation de la requette
            $pstm=$db->prepare($request);
            


            //Execution de la requette
            $pstm->execute(array(':lib'=>$terminalOb->getLibelle(),
                    ':mac'=>$terminalOb->getMacAdresse(),
                    ':prix'=>$terminalOb->getPrix(),
                    ':id'=>$terminalOb->getIdTerminal()
            ));

            $pstm->closeCursor();
            $pstm=Null;

            //Fermeture de la connexion
            Database::close();




        }
        catch (PDOException $ex){
            ?>
            <script> console.log("Impossible de faire une mis <?= $ex->getMessage()?>")</script>
            <?php

        }


    }

}





