<?php
date_default_timezone_set('America/Los_Angeles');
require_once ('../../modele/classes/Database.php');
require_once ('../../modele/classes/terminal/TerminalCarte.php');
class TerminalCarteDAO
{


    public static function findbyDateday($date=null)
    {
            if (is_null($date)){
                $request="SELECT * FROM `termicartes` WHERE DAYOFWEEK(dateTransaction)=DAYOFWEEK(NOW()) ";
            }else{
                $date = new DateTime($date);
                $date = $date->format('Y-m-d');
                $request="SELECT * FROM `termicartes` WHERE date(dateTransaction) = :x";
            }
        $CreditTab = Array();
        $db = Database::getInstance();
        try{
            //On s'assure que la connexion n'est pas null
            if (is_null($db)){
                throw new PDOException("Impossible d'effectuer une requette de recherche verifier la connexion");
            }
            //Preparation de la requette SQL pour l'execution(Tableau)
            $pstmt = $db->prepare($request);

            $pstmt->bindValue(':x',$date);
            $pstmt->execute();
            //Parcours de notre pstm tant qu'il y des données
            while ($result = $pstmt->fetch(PDO::FETCH_OBJ)){
                $Credit= new TerminalCarte();
                $Credit->loadFromObjet($result);

                array_push($CreditTab,$Credit);
            }

            $pstmt->closeCursor();
            $pstmt= NULL;
        }
        catch (PDOException $ex){
            ?>
            <!-- Affichage du message d'erreur au console-->
            <script>console.log("Error createDAO:  <?= $ex->getMessage()?>")</script>
            <?php
        }
        return $CreditTab;
    }
      public static function findbyDateAnnee($Annee)
    {
        if (is_null($Annee)){
            $request="SELECT * FROM `termicartes` WHERE YEAR(dateTransaction)=YEAR(NOW())";
        }else{
            //$Annee = new DateTime($Annee);
            //$Annee = $Annee->format('Y-m-d');
            $request="SELECT * FROM `termicartes` WHERE YEAR(dateTransaction)=:x";
        }

        $CreditTab = Array();
        $db = Database::getInstance();
        try{
            //On s'assure que la connexion n'est pas null
            if (is_null($db)){
                throw new PDOException("Impossible d'effectuer une requette de recherche verifier la connexion");
            }
            //Preparation de la requette SQL pour l'execution(Tableau)
            $pstmt = $db->prepare($request);

            $pstmt->bindValue(':x',$Annee);
            $pstmt->execute();
            //Parcours de notre pstm tant qu'il y des données
            while ($result = $pstmt->fetch(PDO::FETCH_OBJ)){
                $Credit= new TerminalCarte();
                $Credit->loadFromObjet($result);

                array_push($CreditTab,$Credit);
            }

            $pstmt->closeCursor();
            $pstmt= NULL;
        }
        catch (PDOException $ex){
            ?>
            <!-- Affichage du message d'erreur au console-->
            <script>console.log("Error createDAO:  <?= $ex->getMessage()?>")</script>
            <?php
        }
        return $CreditTab;
    }

      public static function findbyDateMois($Mois=NULL)
    {
            if (is_null($Mois)){
                $request="SELECT * FROM `termicartes` WHERE MONTH(dateTransaction)=MONTH(NOW())";
            }else{
               // $Mois = new DateTime($Mois);
               // $Mois = $Mois->format('%m');
                $request="SELECT * FROM `termicartes` WHERE month(dateTransaction)=:x";
            }

            $CreditTab = Array();
        $db = Database::getInstance();
        try{
            //On s'assure que la connexion n'est pas null
            if (is_null($db)){
                throw new PDOException("Impossible d'effectuer une requette de recherche verifier la connexion");
            }
            //Preparation de la requette SQL pour l'execution(Tableau)
            $pstmt = $db->prepare($request);

            $pstmt->bindValue(':x',$Mois);
            $pstmt->execute();
            //Parcours de notre pstm tant qu'il y des données
            while ($result = $pstmt->fetch(PDO::FETCH_OBJ)){
                $Credit= new TerminalCarte();
                $Credit->loadFromObjet($result);

                array_push($CreditTab,$Credit);
            }

            $pstmt->closeCursor();
            $pstmt= NULL;
        }
        catch (PDOException $ex){
            ?>
            <!-- Affichage du message d'erreur au console-->
            <script>console.log("Error createDAO:  <?= $ex->getMessage()?>")</script>
            <?php
        }
        return $CreditTab;
    }

}