<?php

require_once '/../modele/classes/Database.php';
require_once '/../modele/classes/Personnes.php';
require_once '../../modele/ContactsEntrsDAO.php';


class PersonneDAO{

    /***
     * Methode permettant d'ajouter une personne
     * @param $terminalO
     */
    public static function create(Personnes $personneO){
        $db = Database::getInstance();



        $request="INSERT INTO personnes (idPersonne,prenom,nom,numCell,	mail,password,typeCompte) values (:id,:prenom,:nom,:numCell,:mail,:pwd,:typeCompte)";

        try{



            //On s'assure que la connexion n'est pas null
            if (is_null($db)){
                throw new PDOException("Impossible d'insérer un terminal");
            }

            //Preparation de la requette SQL pour l'execution(Tableau)
            $pstm = $db->prepare($request);

            $typeCompte = $personneO->getTypeCompte();




            $pstm->bindValue(':id', $personneO->getId());
            $pstm->bindValue(':prenom',$personneO->getPrenom());
            $pstm->bindValue(':nom', $personneO->getNom());
            $pstm->bindValue(':numCell', $personneO->getNumCell());
            $pstm->bindValue(':mail', $personneO->getMail());
            $pstm->bindValue(':pwd', $personneO->getPassword());
            $pstm->bindValue(':typeCompte', $typeCompte);


            $pstm->execute();

            $pstm= NULL;
            //Deconnexion a la base de donnée
            Database::close();

            if ($typeCompte==2){
                echo 'Hola type '.$typeCompte;
                var_dump($typeCompte);
                ContactsEntrsDAO::addContact($personneO->getId());
            }



            ?>
            <script>console.log("Insertion complété du terminal avec l'ID:   <?=$personneO->getIdTerminal()?>")</script>
            <?php



        }
        catch (PDOException $ex){
?>
            <script>console.log("Error createDAO:  <?= $ex->getMessage()?>")</script>
<?php
        }
    }


    /***
     * Methode permettant de trouver un Terminal par Id et retourne un objet
     * Si on ne fourni pas l'id, alors on retourne une liste de terminaux
     * @param $id
     * @return Terminal|null
     */
    public static function findById($id=NULL)
    {
        $request="";

        //Si On ne saisit pas l'id, on retourne toute la liste
        if ($id==NULL){
            $request="SELECT * FROM personnes";
        }
        else
            $request="SELECT * FROM personnes WHERE idPersonne = :x";

        $personTab= Array();

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
                    $personne = new Personnes();

                    //Transfere des information d'objet vers un tableau
                    $personne->loadFromObjet($result);

                    //On insere chaque objet a la fin du tableau $termTab
                    array_push($personTab,$personne);
                }

                $pstmt->closeCursor();
                $pstmt= NULL;


        }
        catch (PDOException $ex){
            ?>
            <!-- Affichage du message d'erreur au console personne-->
            <script>console.log("Error createDAO:  <?= $ex->getMessage()?>")</script>
            <?php
        }
        return $personTab;




    }

    /***
     * Methode permettant de supprimer un terminal, réserver au SyperAdmin
     * @param null $terminalObjet
     */
    public static function delete(Personnes $personneObjet){

        $request="DELETE FROM personnes WHERE idPersonne=:id";

        $db = Database::getInstance();

        try {
            if (is_null($personneObjet)){
                throw new PDOException("Aucun parametre fourni DAO ");
                ?>
                <!-- Affichage du message d'erreur au console terminal-->
                <script>console.log("Impossible de supprimer, aucun parametre")</script>
                <?php
            }else{
                //Preparation de la requette SQL pour l'execution(Tableau)
                $pstm=$db->prepare($request);
                //Execution de la requette préparer
                $pstm->execute(array(":id"=>$personneObjet->getId()));

                //On arret le curseur
                $pstm->closeCursor();
                //On vide la variable
                $pstm = null;

                //On ferme la connexion
                Database::close();
            }


            
        }
        catch (PDOException $ex){
            ?>
            <script> console.log("Impossible de supprimer <?= $ex->getMessage()?>")</script>
            <?php
        }


    }

    /***
     * Methode permettant de faire une mise d'un terminal
     * @param $terminalOb
     */
    public static function update(Personnes $personneOb){
        $request="UPDATE personnes SET prenom=:prenom, nom=:nom, numCell=:numCell, mail=:mail,password=:password, typeCompte=:typeCompte,actived=:actived, dateModification=:dateModif  WHERE idPersonne=:id";

        $db=Database::getInstance();

        try {
            //Preparation de la requette
            $pstm=$db->prepare($request);


            //Association des valeur
            $pstm->bindValue(":prenom", $personneOb->getPrenom(),PDO::PARAM_STR);
            $pstm->bindValue(':nom', $personneOb->getNom(),PDO::PARAM_STR);
            $pstm->bindValue(':numCell', $personneOb->getNumCell(),PDO::PARAM_STR);
            $pstm->bindValue('mail', $personneOb->getMail(),PDO::PARAM_STR);
            $pstm->bindValue(':password', $personneOb->getPassword(),PDO::PARAM_STR);
            $pstm->bindValue(':typeCompte',$personneOb->getTypeCompte(),PDO::PARAM_INT);
            $pstm->bindValue(':dateModif', $personneOb->getDateModification());
            $pstm->bindValue(':actived', $personneOb->getActived(),PDO::PARAM_BOOL);

            $pstm->bindValue(":id", $personneOb->getId());

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





