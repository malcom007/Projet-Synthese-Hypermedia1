<?php


require_once '/../modele/classes/CartesClients.php';
require_once '/../modele/classes/Database.php';

class CartesClientsDAO extends CartesDAO
{


    /**
     * @param $id
     * Rechercher les cartes activés
     */
    public function findByStatut($statut = 1)
    {
        $db = Database::getInstance();
        $listeCartesActives = array();
        try {
            $pstmt = $db->prepare("SELECT * FROM Cartes WHERE statut =1");
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