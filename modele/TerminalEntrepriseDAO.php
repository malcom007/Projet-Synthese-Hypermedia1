<?php

require_once '/../modele/classes/Database.php';
require_once '/../modele/classes/TerminalEntreprise.php';
require_once 'TransporteurDAO.php';


class TerminalEntrepriseDAO extends TerminalDAO {



    /***
     * Methode permettant d'ajouter un terminal en inventaire par les employes de SwipnGo
     * @param $terminalO
     */
    public static function addTerminal(TerminalEntreprise $terminalO){
        $db = Database::getInstance();
        $test = new TerminalEntreprise();


        $request="INSERT INTO entrepriseterminal (idEntreprise,idTerminal,statut,login,password) values (:idEntreprise,:idTerminal,:statut,:login,:password)";

        try{

            //On s'assure que la connexion n'est pas null
            if (is_null($db)){
                throw new PDOException("Impossible d'insérer un terminal");
            }

            //Preparation de la requette SQL pour l'execution(Tableau)
            $pstm = $db->prepare($request);

            $pstm->bindValue('idEntreprise', $terminalO->getIdEntreprise());
            $pstm->bindValue(':idTerminal', $terminalO->getIdTerminal());
            $pstm->bindValue(':statut',$terminalO->getStatut());
            $pstm->bindValue(':login',$terminalO->getLogin());
            $pstm->bindValue(':password',$terminalO->getPassword());


            $pstm->execute();

            $pstm->closeCursor();

            $pstm= NULL;

            echo "Insertion complete";

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
     *
     * @param null $id
     * @return array|Terminal|null
     * @throws Exception
     */
    public static function findByIdTerminalByIdEntreprise($idTerminal=NULL, $idEntreprise=Null)
    {

        $request="";

        //Si On ne saisit pas l'id, on retourne toute la liste
        if ($idTerminal==NULL || $idEntreprise==Null ){
            throw new Exception("Veuillez saisir un id valide ");
        }
        else
            $request="SELECT * FROM terminals JOIN entrepriseterminal WHERE entrepriseterminal.idTerminal = terminals.idTerminal AND entrepriseterminal.idTerminal= :x and entrepriseterminal.idEntreprise= :y ";

        $termTab= Array();

        $db = Database::getInstance();


        try{

            //On s'assure que la connexion n'est pas null
            if (is_null($db)){
                throw new PDOException("Impossible d'effectuer une requette de recherche verifier la connexion");
            }
            //Preparation de la requette SQL pour l'execution(Tableau)
                $pstmt = $db->prepare($request);

                $pstmt->bindValue(':x',$idTerminal);
                $pstmt->bindValue(':y',$idEntreprise);


                $pstmt->execute();


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

    public static function findAllByIdEntreprise($idEntreprise=Null)
    {
        var_dump($idEntreprise);


        //Si On ne saisit pas l'id, on retourne toute la liste
        if (is_null($idEntreprise)){
            throw new Exception("Veuillez saisir un id valide ");
        }
        else
            $request="SELECT * FROM terminals JOIN entrepriseterminal WHERE entrepriseterminal.idTerminal = terminals.idTerminal AND entrepriseterminal.idEntreprise= :y";

        $termTab= Array();

        $db = Database::getInstance();


        try{

            //On s'assure que la connexion n'est pas null
            if (is_null($db)){
                throw new PDOException("Impossible d'effectuer une requette de recherche verifier la connexion");
            }
            //Preparation de la requette SQL pour l'execution(Tableau)
            $pstmt = $db->prepare($request);


            $pstmt->bindValue(':y',$idEntreprise);


            $pstmt->execute();


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

    /***
     * Methode permettant de supprimer un terminal, réserver au SyperAdmin
     * @param null $terminalObjet
     */
    public static function delete( $terminalObjet){

        $request="DELETE FROM entrepriseterminal WHERE idTerminal=:idTerminal and idEntreprise=:idEntreprise";



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

                $pstm->bindValue(':idTerminal', $terminalObjet->getIdTerminal());
                $pstm->bindValue(':idEntreprise', $terminalObjet->getIdEntreprise());

                //Execution de la requette préparer
                $pstm->execute();

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
        $request="UPDATE entrepriseterminal SET statut=:statut, password=:pwd, dateModification=NOW() WHERE idTerminal=:idTermi and idEntreprise=:idEntrep";

        $db=Database::getInstance();

        try {
            //Preparation de la requette
            $pstm=$db->prepare($request);
            
            $pstm->bindValue(':idTermi', $terminalOb->getIdTerminal());
            $pstm->bindValue(':idEntrep', $terminalOb->getIdEntreprise());

            $pstm->bindValue(':statut', $terminalOb->getStatut());
            $pstm->bindValue(':pwd', $terminalOb->getPassword());

            var_dump($terminalOb);

            //Execution de la requette
            $pstm->execute();

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





