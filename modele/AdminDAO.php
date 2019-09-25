<?php
require_once '/../modele/classes/Database.php';
require_once '/../modele/classes/Admin.php';
require_once 'PersonneDAO.php';

class AdminDAO extends PersonneDAO {


    public static function countAllActiveUsagers(){

        $request = "SELECT personnes.actived FROM personnes JOIN usagers WHERE usagers.idUsager = personnes.idPersonne and personnes.actived=:x";

        $db = Database::getInstance();

        try{

            //On s'assure que la connexion n'est pas null
            if (is_null($db)) {
                throw new PDOException("Impossible d'insérer un poste");
            }

            //Preparation de la requette SQL pour l'execution(Tableau)
            $pstm = $db->prepare($request);

            $pstm->bindValue(':x',1);
            $pstm->execute();

           $result = $pstm->rowCount();

            $pstm->closeCursor();
            $pstm = NULL;

            return $result;



        }
        catch (PDOException $ex){
            ?>
            <!-- Affichage du message d'erreur au console personne-->
            <script>console.log("Error createDAO:  <?= $ex->getMessage()?>")</script>
            <?php

        }

    }

    public static function countAllInactiveUsagers(){

        $request = "SELECT personnes.actived FROM personnes JOIN usagers WHERE usagers.idUsager = personnes.idPersonne and personnes.actived=:x";

        $db = Database::getInstance();

        try{

            //On s'assure que la connexion n'est pas null
            if (is_null($db)) {
                throw new PDOException("Impossible d'insérer un poste");
            }

            //Preparation de la requette SQL pour l'execution(Tableau)
            $pstm = $db->prepare($request);

            $pstm->bindValue(':x',0);
            $pstm->execute();

            $result = $pstm->rowCount();

            $pstm->closeCursor();
            $pstm = NULL;

            return $result;



        }
        catch (PDOException $ex){
            ?>
            <!-- Affichage du message d'erreur au console personne-->
            <script>console.log("Error createDAO:  <?= $ex->getMessage()?>")</script>
            <?php

        }

    }

    public static function countAllActiveTransporteurs(){
        $request = "SELECT transporteurs.idTransporteur from transporteurs
                    JOIN transportcontact
                    JOIN personnes
                    WHERE transportcontact.idContact = personnes.idPersonne AND
                    transportcontact.idTransport = transporteurs.idTransporteur";
    }




}