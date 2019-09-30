<?php

require_once '/../modele/classes/Cartes.php';
require_once '/../modele/classes/Database.php';

//require_once '/../modele/classes/Database.php';
//require_once '/../modele/classes/Personnes.php';
class CartesDAO
{
    /**
     * @param $carte
     * Creer une nouvelle Carte dans la BD dans l'inventaire
     */
    public function create(Cartes $carte)
    {
        //etablir la connection
        $db = Database::getInstance();
        var_dump($db->errorInfo());

        $request = "INSERT INTO cartes VALUES (:id,:lib,:dAj)";
        try {
            if (is_null($db)) {
                throw new PDOException("Impossible d'insérer");
            }

            $pstmt = $db->prepare($request);
            $pstmt->bindValue(':id', $carte->getIdCarte());
            $pstmt->bindValue(':lib', $carte->getLibelle());
            $pstmt->bindValue(':dAj', $carte->getDateAjout());
            $pstmt->execute();
            $pstmt->closeCursor();
            $pstmt = NULL;
            Database::close();
            ?>
            <script>console.log("Insertion complété l'ID:   <?=$carte->getIdCarte()?>")</script>
            <?php
        } catch (PDOException $exception) {
            $exception->getMessage();
        }
    }


    /**
     *Rechercher toutes les cartes existantes dans l'inventaire
     */
    public function findAll()
    {
        $db = Database::getInstance();
        $listeCartes = array();

        try {
            $pstmt = $db->prepare("SELECT * FROM Cartes");
            $pstmt->execute();
            while ($result = $pstmt->fetch(PDO::FETCH_OBJ)) {
                $carte = new Cartes();
                $carte->loadFromObject($result);
                array_push($listeCartes, $carte);
            }
            $pstmt->closeCursor();
            $pstmt = NULL;
            Database::close();

        } catch (PDOException $exception) {
            $exception->getMessage();
        }
        return $listeCartes;
    }

    /**
     * @param $id
     * Rechercher une carte par son Id
     */
    public function findById($id)
    {

        $db = Database::getInstance();

        try {
            $pstmt = $db->prepare("SELECT * FROM Cartes WHERE idCarte =:id");
            $pstmt->execute(array(':id' => $id));
            $result = $pstmt->fetch(PDO::FETCH_OBJ);
            if ($result) {
                $carte = new Cartes();
                $carte->loadFromObject($result);
                $pstmt = NULL;
                Database::close();
                return $carte;
            }

        } catch (PDOException $exception) {
            $exception->getMessage();
        }

    }

    public function delete($carte)
    {

    }


}