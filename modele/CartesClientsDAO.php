<?php


require_once '/../modele/classes/CartesClients.php';
require_once '/../modele/classes/Database.php';

class CartesClientsDAO extends CartesDAO
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
    public function findByStatut($statut = 1)
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


}