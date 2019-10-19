<?php


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
     * @param $id
     * Rechercher une carte par son Id
     */
    public function findById($id = null)
    {
        $request = "";
        if ($id == NULL) {
            $request = "SELECT * FROM Cartes";
        } else {
            $request = "SELECT * FROM Cartes WHERE idCarte =:id";
        }
        $listeCartes = array();
        $db = Database::getInstance();

        try {
            if (is_null($db)) {
                throw new PDOException("Verifier la connexion! recherche impossible");
            }
            $pstmt = $db->prepare($request);
            $pstmt->execute(array(':id' => $id));
            while ($result = $pstmt->fetch(PDO::FETCH_OBJ)) {
                $carte = new Cartes();
                var_dump($result);
                $carte->loadFromObject($result);
                array_push($listeCartes, $carte);
            }
            $pstmt = NULL;
            Database::close();

        } catch (PDOException $exception) {
            ?>
            <!-- Affichage du message d'erreur au console personne-->
            <script>console.log("Error:  <?= $exception->getMessage()?>")</script>
            <?php

        }
        return $listeCartes;

    }

    public function delete($carte)
    {
        $request = "DELETE FROM cartes where idCarte = :id";
        $db = Database::getInstance();
        try {
            if (is_null($carte)) {
                throw new PDOException("la carte n'existe pas");
                ?>
                <!-- Affichage du message d'erreur au console terminal-->
                <script>console.log("Impossible de supprimer, id inexistant")</script>
                <?php
            }
            $pstm = $db->prepare($request);
            $pstm->execute(array(":id" => $carte->getIdCarte()));
            $pstm->closeCursor();
            $pstm = NULL;
            Database::close();

        } catch (PDOException $ex) {
            ?>
            <script> console.log("Impossible de supprimer <?= $ex->getMessage()?>")</script>
            <?php
        }

    }




}