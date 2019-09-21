<?php
require_once '../../modele/PersonneDAO.php';

class ContactsEntrsDAO extends  PersonneDAO
{
    public static function create($poste)
    {
        $db = Database::getInstance();

        $request = "INSERT INTO contactsents (numPoste) values (:num)";

        try {

            //On s'assure que la connexion n'est pas null
            if (is_null($db)) {
                throw new PDOException("Impossible d'insérer un poste");
            }

            //Preparation de la requette SQL pour l'execution(Tableau)
            $pstm = $db->prepare($request);

            $pstm->execute(array(
                ':num' => $poste->getNumeroPoste(),



            ));

            $pstm->closeCursor();

            $pstm = NULL;

            //Deconnexion a la base de donnée
            Database::close();

            ?>
            <script>console.log("Insertion complété du terminal avec l'ID:   <?=$poste->getIdTerminal()?>")</script>
            <?php


        } catch (PDOException $ex) {
            ?>
            <script>console.log("Error createDAO:  <?= $ex->getMessage()?>")</script>
            <?php
        }
    }
}