<?php


require_once '/../modele/classes/CarteUsagers.php';
require_once '/../modele/classes/Database.php';

class CartesUsagersDAO extends CartesDAO
{



    public function update($carte)
    {
        $request = "UPDATE cartesusagers SET idUsager=':idusager', nbreTitre=':nbreTitre', statut=':stat', dateExpiration=':dexp', dateActivation='dact'";
        $db = Database::getInstance();
        try {
            $pstm = $db->prepare($request);
            $pstm->bindValue(':idusager', $carte->getIdUsager());
            $pstm->bindValue(':nbreTitre', $carte->getNbreTitre());
            $pstm->bindValue(':stat', $carte->getStatut());
            $pstm->bindValue(':dExp', $carte->getDateExpiration());
            $pstm->bindValue(':dact', $carte->getDateActivation());
            $pstm->bindValue(":idCarte", $carte->getIdCarte());

            $pstm->execute();
            $pstm->closeCursor();
            $pstm = NUll;
            Database::close();

        } catch (PDOException $exception) {
            throw $exception;
        }

    }

    /**
     * @param $id
     * Rechercher les cartes activés
     **/
    public function findByStatut()
    {
        $db = Database::getInstance();
        $listeCartesActives = array();
        try {

            $pstmt = $db->prepare("SELECT * FROM Cartesusagers WHERE statut =1");
            $pstmt->execute();
            while ($result = $pstmt->fetch(PDO::FETCH_OBJ)) {
                $carte = new Cartes();
                $carte->loadFromObject($result);
                array_push($listeCartesActives, $carte);
            }
            $pstmt->closeCursor();
            $pstmt = NULL;
            Database::close();

        } catch (PDOException $exception) {
            $exception->getMessage();
        }
        return $listeCartesActives;

    }

    public function findByUsager(Usagers $usager)
    {
        $db = Database::getInstance();

        try {

            $pstmt = $db->prepare("SELECT * FROM Cartesusagers WHERE idUsager =':x'");
            $pstmt->execute(array(':x' => $usager->getId()));
            if ($result = $pstmt->fetch(PDO::FETCH_OBJ)) {
                $carte = new CarteUsagers();
                $carte->loadFromObject($result);
                $pstmt->closeCursor();
                $pstmt = NULL;
                return $carte;
            }
            $pstmt->closeCursor();
            $pstmt = NULL;
            Database::close();

        } catch (PDOException $exception) {
            $exception->getMessage();
        }
        return NULL;

    }

    public static function addUsager(Usagers $usager)
    {
        $request = "INSERT INTO cartesusagers (idUsager) values (':idUsager') ";
        $db = Database::getInstance();

        try {
            if (is_null($db)) {
                throw new PDOException("Impossible d'effectuer une requete de recherche verifier la connexion");
            }
            $pstmt = $db->prepare($request);
            $pstmt->bindValue(':idUsager', $usager->getIdUsager());
            $pstmt->execute();
            $pstmt->closeCursor();
            $pstmt = NULL;
            Database::close();
            ?>
            <script>console.log("Insertion complété l'ID:   <?=$usager->getIdUsager()?>")</script>
            <?php
        } catch (PDOException $exception) {
            $exception->getMessage();
        }

    }


}