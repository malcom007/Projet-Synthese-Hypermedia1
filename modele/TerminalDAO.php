<!--<scrip>-->
<!---->
<!--</scrip>-->
<!---->
<!---->
<?php
//
require_once '/../modele/classes/Database.php';
require_once '/../modele/classes/Terminal.php';
//
//class TerminalDAO{
//
//
//    public static function create($terminalO){
//        $db = Database::getInstance();
//
//        $request="INSERT INTO terminals (idTerminal,libelle,macAdress,prix) values (:id,:lib,:mac,:price)";
//
//        try{
//
//            //On s'assure que la connexion n'est pas null
//            if (is_null($db)){
//                throw new PDOException("Impossible d'insérer un terminal");
//            }
//
//            //Preparation de la requette SQL pour l'execution(Tableau)
//            $pstm = $db->prepare($request);
//
//            $pstm->execute(array(
//                ':id' => $terminalO->getIdTerminal(),
//                ':lib' => $terminalO->getLibelle(),
//                ':mac' => $terminalO->getMacAdresse(),
//                ':price' => $terminalO->getPrix()
//            ));
//
//            $pstm->closeCursor();
//
//            $pstm= NULL;
//
//            //Deconnexion a la base de donnée
//            Database::close();
//
//            ?>
<!--            <script>console.log("Insertion complété du terminal avec l'ID:   --><?//=$terminalO->getIdTerminal()?>//")</script>
//            <?php
//
//
//
//        }
//        catch (PDOException $ex){
//?>
<!--            <script>console.log("Error createDAO:  --><?//= $ex->getMessage()?>//")</script>
<?php
//        }
//    }
//
//
//    /***
//     * Methode permettant de trouver un Terminal par Id et retourne un objet
//     * Si on ne fourni pas l'id, alors on retourne une liste de terminaux
//     * @param $id
//     * @return Terminal|null
//     */
//    public static function find($id=NULL)
//    {
//        $request="";
//
//        //Si On ne saisit pas l'id, on retourne toute la liste
//        if ($id==NULL){
//            $request="SELECT * FROM terminals";
//        }
//        else
//            $request="SELECT * FROM terminals WHERE idTerminal = :x";
//
//        $termTab= Array();
//
//        $db = Database::getInstance();
//
//
//        try{
//
//            //On s'assure que la connexion n'est pas null
//            if (is_null($db)){
//                throw new PDOException("Impossible d'effectuer une requette de recherche verifier la connexion");
//            }
//            //Preparation de la requette SQL pour l'execution(Tableau)
//                $pstmt = $db->prepare($request);
//
//                $pstmt->execute(array(':x' => $id));
//
//                //Parcours de notre pstm tant qu'il y des données
//                while ($result = $pstmt->fetch(PDO::FETCH_OBJ)){
//                    //Creation d'un terminal
//                    $terminal = new Terminal();
//
//                    //Transfere des information d'objet vers un tableau
//                    $terminal->loadFromObjet($result);
//
//                    //On insere chaque objet a la fin du tableau $termTab
//                    array_push($termTab,$terminal);
//                }
//
//                $pstmt->closeCursor();
//                $pstmt= NULL;
//
//
//        }
//        catch (PDOException $ex){
//            ?>
<!--            <!-- Affichage du message d'erreur au console terminal-->-->
<!--            <script>console.log("Error createDAO:  --><?//= $ex->getMessage()?>//")</script>
//            <?php
//        }
//        return $termTab;
//
//
//
//
//    }
//
//
//    public static function delete($terminalO){
//
//
//    }
//
//}
//
//
//
//
//
