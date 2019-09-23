<?php
require_once '/../modele/classes/Database.php';
require_once '/../modele/classes/Transporteur.php';

class TransporteurDAO
{
    public static function create( $transport){
        $db = Database::getInstance();
        $request="INSERT INTO transporteurs (idTransporteur,RaisonSociale,idAdresse,telephone,datecreation,dateModification) values (:q,:w,:e,:r,:t,:y)";
        try{
            //On s'assure que la connexion n'est pas null
            if (is_null($db)){
                throw new PDOException("Impossible d'insérer un terminal");
            }
            //Preparation de la requette SQL pour l'execution(Tableau)
            $pstm = $db->prepare($request);
            $pstm->bindValue(':q',$transport->getIdTransporteur());
            $pstm->bindValue(':w', $transport->getRaisonSocial());
            $pstm->bindValue(':e',$transport->NUll);
            $pstm->bindValue(':r',$transport->getTelephone());
            $pstm->bindValue(':t',$transport->getDateCreation());
            $pstm->bindValue(':y',$transport->getDateModification());
            $pstm->execute();
            $pstm->closeCursor();
            $pstm= NULL;
            //Deconnexion a la base de donnée
            Database::close();
            ?>
            <script>console.log("Insertion complété du transporteur avec l'ID:   <?=$transport->getIdTransporteur()?>")</script>
            <?php
        }
        catch (PDOException $ex){
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
            $request="SELECT * FROM transporteurs";
        }
        else
            $request="SELECT * FROM transporteurs WHERE idTransporteur  = :x";

        $transp= Array();

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
                //Creation d'un terminal
                $transpor = new Transporteur();

                //Transfere des information d'objet vers un tableau
                $transpor->loadFromObjet($result);

                //On insere chaque objet a la fin du tableau $termTab
                array_push($transp,$transpor);
            }

            $pstmt->closeCursor();
            $pstmt= NULL;


        }
        catch (PDOException $ex){
            ?>
            <!-- Affichage du message d'erreur au console terminal-->
            <script>console.log("Error createDAO:  <?= $ex->getMessage()?>")</script>
            <?php
        }
        return $transp;




    }

}