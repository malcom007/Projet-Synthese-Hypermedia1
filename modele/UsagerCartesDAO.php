<?php
require_once './classes/Cartes.php';
require_once './classes/UsagerCartes.php';
require_once './classes/Database.php';

class UsagerCartesDAO
{
    public static function findAllByUsager($idUsager)
    {
        $requete = "";
        if ($idUsager == NULL)
            $requete = "SELECT * FROM UsagerCartes";
        else
            $requete = "SELECT * FROM UsagersCartes WHERE idUsager=:idU";

        $db = Database::getInstance();
        $listeUsagers = Array();
        try {
            $pstmt = $db->prepare($requete);
            $pstmt->execute(array(':c' => $idUsager));

            while ($result = $pstmt->fetch(PDO::FETCH_OBJ)) {
                $transaction = new UsagerCartes();
                $transaction->loadFromObject($result);
                array_push($listeUsagers, $transaction);
            }
            $pstmt->closeCursor();
            $pstmt = NULL;
            Database::close();
        } catch (PDOException $ex) {
        }
        return $listeUsagers;
    }

    /**
     * @param $transaction
     * Creer une nouvelle Carte dans la BD
     */
    public function create($transaction)
    {
        $db = Database::getInstance();
        try {
            //On s'assure que la connexion n'est pas null
            if (is_null($db)) {
                throw new PDOException("Impossible d'insérer ");
            }

            $pstmt = $db->prepare("INSERT INTO UsagerCartes (idUsager, idCarte,dateTransaction, titreAjouter) VALUES (:idU,:idC,:dtrans,:titre)");
            $pstmt->execute(array(':idU' => $transaction->getIdUsager(),
                ':idC' => $transaction->getIdCarte(),
                ':dTrans' => $transaction->getDateTransaction(),
                ':titre ' => $transaction->getTitreAjouter()

            ));
            $pstmt->closeCursor();
            $pstmt = NULL;
            Database::close();
            ?>
            <script>console.log("titre ajouté avec succes complété l'ID:   <?=$transaction->getDateTransaction()?>")</script>
            <?php
        } catch (PDOException $exception) {
            $exception->getMessage();
        }

    }
}