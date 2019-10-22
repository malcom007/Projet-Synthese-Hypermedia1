<?php
//require_once '/../modele/PersonneDAO.php';
require_once '/../modele/classes/ContactsEntrs.php';

class ContactsEntrsDAO extends  PersonneDAO
{
    public static function addContact( $poste)
    {
        $db = Database::getInstance();

        $request = "INSERT INTO contactsents (idContact) values (:ud)";

        try {

            //On s'assure que la connexion n'est pas null
            if (is_null($db)) {
                throw new PDOException("Impossible d'insérer un poste");
            }

            //Preparation de la requette SQL pour l'execution(Tableau)
            $pstm = $db->prepare($request);
            $pstm->bindValue(':ud',$poste);


            $pstm->execute();
            $pstm->closeCursor();

            $pstm = NULL;

            //Deconnexion a la base de donnée
            Database::close();

            ?>
            <script>console.log("Insertion complété du contact avec le numero du poste:   <?=$poste->getNumeroPoste()?>")</script>
            <?php


        } catch (PDOException $ex) {
            ?>
            <script>console.log("Error createDAO:  <?= $ex->getMessage()?>")</script>
            <?php
        }
    }
    public static function find($id=NULL)
    {
        $request="";

        //Si On ne saisit pas l'id, on retourne toute la liste
        if ($id==NULL){
            $request="SELECT * FROM contactsents ";
        }
        else
            $request="SELECT * FROM  contactsents JOIN personnes  WHERE personnes.idPersonne = contactsents.idContact  AND personnes.idPersonne = :x ";

        $Tabcontact= Array();

        $db = Database::getInstance();


        try{

            //On s'assure que la connexion n'est pas null
            if (is_null($db)){
                throw new PDOException("Impossible d'effectuer une requette de recherche verifier la connexion");
            }
            //Preparation de la requette SQL pour l'execution(Tableau)
            $pstmt = $db->prepare($request);

            $pstmt->execute(array(':x' => $id));

            //Parcours de notre pstm tant qu'il y des données
            while ($result = $pstmt->fetch(PDO::FETCH_OBJ)){

                //Creation d'une Personne
                $contact = new ContactsEntrs();

                //Transfere des information d'objet vers un tableau
                $contact->loadFromObjet($result);

                //On insere chaque objet a la fin du tableau $termTab
                array_push($Tabcontact,$contact);
            }

            $pstmt->closeCursor();
            $pstmt= NULL;


        }
        catch (PDOException $ex){
            ?>
            <!-- Affichage du message d'erreur au console->
            <script>console.log("Error createDAO:  <?= $ex->getMessage()?>")</script>
            <?php
        }
        return $Tabcontact;




    }


            public static function updat(ContactsEntrs $contacO){
            $request="UPDATE contactsents SET numPoste=:num, WHERE idcontact=:id";

            $db=Database::getInstance();

            try {
                //Preparation de la requette
                $pstm=$db->prepare($request);


                //Association des valeur
                $pstm->bindValue(":num", $contacO->getNumeroPoste());


                //Execution de la requette
                $pstm->execute();

                $pstm->closeCursor();
                $pstm=Null;

                //Fermeture de la connexion
                Database::close();




            }
            catch (PDOException $ex){
            ?>
            <script> console.log("Impossible de faire une mis <?= $ex->getMessage()?>")</script>
            <?php

}


}
}