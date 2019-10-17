<?php
require_once '/../modele/classes/Database.php';
require_once '/../modele/classes/Admin.php';
require_once 'PersonneDAO.php';

class AdminDAO extends PersonneDAO
{



    /*
     * Methode permettant de recuperer la somme journalier de transaction fait par tous les terminaux
     * */

    public static function creditOfDay()
    {

        $request = "SELECT SUM(credit) as sum FROM `termicartes` WHERE DAYOFWEEK(dateTransaction)=DAYOFWEEK(NOW())";

        $sumCredit = 0;

        $db = Database::getInstance();


        try {

            //On s'assure que la connexion n'est pas null
            if (is_null($db)) {
                throw new PDOException("Impossible d'effectuer une requette de recherche verifier la connexion");
            }
            //Preparation de la requette SQL pour l'execution(Tableau)
            $pstmt = $db->prepare($request);

            $pstmt->execute();

            //Parcours de notre pstm tant qu'il y des données
            while ($result = $pstmt->fetch(PDO::FETCH_OBJ)) {

                $sumCredit = $result->sum;

            }

            $pstmt->closeCursor();
            $pstmt = NULL;


        } catch (PDOException $ex) {
            ?>
            <!-- Affichage du message d'erreur au console personne-->
            <script>console.log("Error createDAO:  <?= $ex->getMessage()?>")</script>
            <?php
        }

        return $sumCredit;


    }


}