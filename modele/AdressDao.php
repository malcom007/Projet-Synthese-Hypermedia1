<?php

require_once '/../modele/classes/Database.php';
class AdressDao
{
    public static function addAdress(Adresse $adresso){
        $db = Database::getInstance();



        $request="INSERT INTO adresses  (idAdresse,rue,quartier,commune,ville,codePostal,Pays) values (:q,:w,:e,:r,:t,:y,:u)";

        try{
            //On s'assure que la connexion n'est pas null
            if (is_null($db)){
                throw new PDOException("Impossible d'insérer une Adresse");
            }
            //Preparation de la requette SQL pour l'execution(Tableau)
            $pstm = $db->prepare($request);

            $pstm->bindValue(':q', $adresso->getIdAdresses());
            $pstm->bindValue(':w',$adresso->getRue());
            $pstm->bindValue(':e', $adresso->getQuartier());
            $pstm->bindValue(':r', $adresso->getCommune());
            $pstm->bindValue(':t', $adresso->getVille());
            $pstm->bindValue(':y', $adresso->getCodePostal());
            $pstm->bindValue(':u', $adresso->getPays());

            $pstm->execute();

            $pstm= NULL;
            //Deconnexion a la base de donnée
            Database::close();

            ?>
            <script>console.log("Insertion complété du terminal avec l'ID:   <?=$adresso->getIdAdresses()?>")</script>
            <?php



        }
        catch (PDOException $ex){
            ?>
            <script>console.log("Error createDAO:  <?= $ex->getMessage()?>")</script>
            <?php
        }
    }

}