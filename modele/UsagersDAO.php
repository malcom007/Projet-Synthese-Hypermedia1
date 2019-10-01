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
    public static function create($usager)
    {
        parent::create($usager);

    }


    /**
     * @param null $id
     * trouver un usager par son id
     */
    public static function findById($id)
    {
        $request = "SELECT * FROM usagers WHERE idUsager = :x";
        $db = Database::getInstance();
        try {
            //On s'assure que la connexion n'est pas null
            if (is_null($db)) {
                throw new PDOException("Impossible d'effectuer une requete de recherche verifier la connexion");
            }

            $pstmt = $db->prepare($request);
            $pstmt->execute(array(':x' => $id));

            $result = $pstmt->fetch(PDO::FETCH_OBJ);
            if ($result) {
                $usager = new Usagers();

                $usager->loadFromObjet($result);
                $pstmt = NULL;
                Database::close();
                return $usager;
            }
            $pstmt->closeCursor();
            $pstmt = NULL;
            Database::close();
        } catch (PDOException $ex) {
            ?>
            <!-- Affichage du message d'erreur au console -->
            <script>console.log("Error createDAO:  <?= $ex->getMessage()?>")</script>
            <?php
        }
        return null;
    }


    /**
     * @param Usagers $usagerObjet
     */
    public static function delete(Usagers $usagerObjet)
    {

        $request = "DELETE FROM usagers WHERE idUsager=:id";

        $db = Database::getInstance();

        try {
            if (is_null($usagerObjet)) {
                throw new PDOException("Aucun parametre fourni DAO ");
                ?>
                <!-- Affichage du message d'erreur au console terminal-->
                <script>console.log("Impossible de supprimer, aucun parametre")</script>
                <?php
            } else {
                //Preparation de la requete SQL pour l'execution(Tableau)
                $pstm = $db->prepare($request);
                //Execution de la requete préparée
                $pstm->execute(array(":id" => $usagerObjet->getIdUsager()));

                //On arret le curseur
                $pstm->closeCursor();
                //On vide la variable
                $pstm = null;

                //On ferme la connexion
                Database::close();
            }
        } catch (PDOException $ex) {
            ?>
            <script> console.log("Impossible de supprimer <?= $ex->getMessage()?>")</script>
            <?php
        }
    }


    /**
     * modifier les imfos sur un usager
     * @param Usagers $usagerObjet
     */
    public static function update(Usagers $usagerObjet)
    {
        $request = "UPDATE usagers SET prenom=:prenom, nom=:nom, numCell=:numCell, mail=:mail, password=:password, typeCompte=:typeCompte, actived=:actived, dateActivation=:dateActiv ,dateModification=:dateModif  WHERE idUsager=:id";

        $db = Database::getInstance();

        try {
            //Preparation de la requette
            $pstm = $db->prepare($request);


            //Association des valeur
            $pstm->bindValue(":prenom", $usagerObjet->getPrenom(), PDO::PARAM_STR);
            $pstm->bindValue(':nom', $usagerObjet->getNom(), PDO::PARAM_STR);
            $pstm->bindValue(':numCell', $usagerObjet->getNumCell(), PDO::PARAM_STR);
            $pstm->bindValue('mail', $usagerObjet->getMail(), PDO::PARAM_STR);
            $pstm->bindValue(':password', $usagerObjet->getPassword(), PDO::PARAM_STR);
            $pstm->bindValue(':typeCompte', $usagerObjet->getTypeCompte(), PDO::PARAM_INT);
            $pstm->bindValue(':dateActiv', $usagerObjet->getDateActivation());
            $pstm->bindValue(':dateModif', $usagerObjet->getDateModification());
            $pstm->bindValue(':actived', $usagerObjet->getActived(), PDO::PARAM_BOOL);
            $pstm->bindValue(":id", $usagerObjet->getIdUsager());

            //Execution de la requette
            $pstm->execute();

            $pstm->closeCursor();
            $pstm = Null;

            //Fermeture de la connexion
            Database::close();
        } catch (PDOException $ex) {
            ?>
            <script> console.log("Impossible de faire une mis <?= $ex->getMessage()?>")</script>
            <?php
        }
    }
}