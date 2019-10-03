<?php
require_once '/../modele/classes/Database.php';
require_once '/../modele/classes/Usagers.php';

require_once 'PersonneDAO.php';
class UsagersDAO extends PersonneDAO
{
    /**
     * creer un usager
     * @param $usager
     */

    public static function findByCell($cell)
    {

        $request = "SELECT * FROM personnes WHERE numCell = :x";

        $db = Database::getInstance();
        try {

            if (is_null($db)) {
                throw new PDOException("Impossible d'effectuer une requete de recherche verifier la connexion");
            }
            $pstmt = $db->prepare($request);
            $pstmt->execute(array(':x' => $cell));

            if ($result = $pstmt->fetch(PDO::FETCH_OBJ)) {
                $usager = new Usagers();
                $usager->setNumCell($result->numCell);
                $pstmt->closeCursor();
                return $usager;

            }
            $pstmt->closeCursor();
            return NULL;

        } catch (PDOException $exception) {
            ?>
            <!-- Affichage du message d'erreur au console personne-->
            <script>console.log("Error createDAO:  <?= $exception->getMessage()?>")</script>
            <?php
        }


    }






    /**
     * @param null $id
     * trouver un usager par son id
     */


    /**
     * @param Usagers $usagerObjet
     */



    /**
     * modifier les imfos sur un usager
     * @param Usagers $usagerObjet
     */

}