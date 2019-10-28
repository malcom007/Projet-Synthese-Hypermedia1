<?php

class TransporteurDAO
{
    public static function create(Adresse $adresso, Transporteur $transport)
    {
        $db = Database::getInstance();
        $request = "INSERT INTO adresses  (idAdresse,rue,quartier,commune,ville,codePostal,Pays) values (:q,:w,:e,:r,:t,:y,:u)";

        try {
            //On s'assure que la connexion n'est pas null
            if (is_null($db)) {
                throw new PDOException("Impossible d'insérer une Adresse");
            }
            //Preparation de la requette SQL pour l'execution(Tableau)
            $pstm = $db->prepare($request);

            $pstm->bindValue(':q', $adresso->getIdAdresses());
            $pstm->bindValue(':w', $adresso->getRue());
            $pstm->bindValue(':e', $adresso->getQuartier());
            $pstm->bindValue(':r', $adresso->getCommune());
            $pstm->bindValue(':t', $adresso->getVille());
            $pstm->bindValue(':y', $adresso->getCodePostal());
            $pstm->bindValue(':u', $adresso->getPays());

            $pstm->execute();
            $last_id_insert = $adresso->getIdAdresses();
            $pstm = NULL;
            //Deconnexion a la base de donnée
            Database::close();

            ?>
            <script>console.log("Insertion complété du terminal avec l'ID:   <?=$adresso->getIdAdresses()?>")</script>
            <?php


            $request = "INSERT INTO transporteurs (idTransporteur,RaisonSociale,idAdresse,telephone) values (:q,:w,:e,:r)";

            //On s'assure que la connexion n'est pas null
            if (is_null($db)) {
                throw new PDOException("Impossible d'insérer un transporteur");
            }
            //Preparation de la requette SQL pour l'execution(Tableau)
            $pstm = $db->prepare($request);
            $pstm->bindValue(':q', $transport->getIdTransporteur());
            $pstm->bindValue(':w', $transport->getRaisonSocial());
            $pstm->bindValue(':e', $adresso->getIdAdresses());
            $pstm->bindValue(':r', $transport->getTelephone());

            $pstm->execute();
            $pstm->closeCursor();
            $pstm = NULL;
            //Deconnexion a la base de donnée
            Database::close();
            ?>
            <script>console.log("Insertion complété du transporteur avec l'ID:   <?=$transport->getIdTransporteur()?>")</script>
            <?php
        } catch (PDOException $ex) {
            ?>
            <script>console.log("Error createDAO:  <?= $ex->getMessage()?>")</script>
            <?php
        }
    }

    public static function find($id = NULL)
    {
        $request = "";

        //Si On ne saisit pas l'id, on retourne toute la liste
        if ($id == NULL) {
            $request = "SELECT * FROM transporteurs";
        } else
            $request = "SELECT * FROM transporteurs WHERE idTransporteur  = :x";

        $transp = Array();

        $db = Database::getInstance();


        try {

            //On s'assure que la connexion n'est pas null
            if (is_null($db)) {
                throw new PDOException("Impossible d'effectuer une requette de recherche verifier la connexion");
            }
            //Preparation de la requette SQL pour l'execution(Tableau)
            $pstmt = $db->prepare($request);

            $pstmt->execute(array(':x' => $id));

            //Parcours de notre pstm tant qu'il y des données
            while ($result = $pstmt->fetch(PDO::FETCH_OBJ)) {
                //Creation d'un terminal
                $transpor = new Transporteur();

                //Transfere des information d'objet vers un tableau
                $transpor->loadFromObjet($result);

                //On insere chaque objet a la fin du tableau $termTab
                array_push($transp, $transpor);
            }

            $pstmt->closeCursor();
            $pstmt = NULL;


        } catch (PDOException $ex) {
            ?>
            <!-- Affichage du message d'erreur au console terminal-->
            <script>console.log("Error createDAO:  <?= $ex->getMessage()?>")</script>
            <?php
        }
        return $transp;
    }
    public static function findAdresse($id)
    {
        $request = "SELECT * FROM adresses JOIN transporteurs WHERE transporteurs.idAdresse = adresses.idAdresse AND transporteurs.idTransporteur=:x";


        $Adresse = Array();

        $db = Database::getInstance();
        try {

            //On s'assure que la connexion n'est pas null
            if (is_null($db)) {
                throw new PDOException("Impossible d'effectuer une requette de recherche verifier la connexion");
            }
            //Preparation de la requette SQL pour l'execution(Tableau)
            $pstmt = $db->prepare($request);

            $pstmt->execute(array(':x' => $id));

            //Parcours de notre pstm tant qu'il y des données
            while ($result = $pstmt->fetch(PDO::FETCH_OBJ)) {
                //Creation d'un terminal
                $adres= new Adresse();

                //Transfere des information d'objet vers un tableau
                $adres->loadFromObjet($result);

                //On insere chaque objet a la fin du tableau $termTab
                array_push($Adresse, $adres);
            }

            $pstmt->closeCursor();
            $pstmt = NULL;


        } catch (PDOException $ex) {
            ?>
            <!-- Affichage du message d'erreur au console terminal-->
            <script>console.log("Error createDAO:  <?= $ex->getMessage()?>")</script>
            <?php
        }
        return $Adresse;
    }

    public static function delete($transporteuObjet)
    {
        $request = "DELETE FROM transporteurs where idTransporteur=:x ";
        $db = database::getInstance();
        try {
            if (is_null($transporteuObjet)) {
                throw new PDOException("aucun parametre fourni dao");
                ?>
                <!-- Affichage du message d'erreur au console -->
                <script>console.log("Impossible de supprimer, aucun parametre")</script>
                <?php
            } else {
                $pstm = $db->prepare($request);
                $pstm->bindValue(':x', $transporteuObjet->getIdTransporteur());
                //$pstm->bindValue(':y', $transporteuObjet->getIdAdresse());
                $pstm->execute();
                $pstm->closeCursor();
                $pstm = null;
                database::close();
            }

        } catch (PDOException $ex) {
            ?>
            <script> console.log("Impossible de supprimer <?= $ex->getMessage()?>")</script>
            <?php
        }
    }
}