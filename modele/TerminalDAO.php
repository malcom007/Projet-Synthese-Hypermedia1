<scrip>

</scrip>


<?php

require_once '/classes/Database.php';
require_once '/classes/Terminal.php';

class TerminalDAO{


    public static function create($terminalO){
        $db = Database::getInstance();

        try{

            //On s'assure que la connexion n'est pas null
            if (is_null($db)){
                throw new PDOException("Impossible d'insérer un terminal");
            }

        }
        catch (PDOException $ex){
?>
            <script>console.log("Error createDAO:  <?= $ex->getMessage()?>")</script>
<?php
        }
    }


    /***
     * Methode permettant de trouver un Terminal par Id et retourne un objet
     * @param $id
     * @return Terminal|null
     */
    public static function find($id)
    {
        $db = Database::getInstance();

        try{
            //On s'assure que la connexion n'est pas null
            if (!is_null($db)){
                $pstmt = $db->prepare("SELECT * FROM terminals WHERE idTerminal = :x");
                $pstmt->closeCursor();
                $pstmt->execute(array(':x' => $id));

                $result = $pstmt->fetch(PDO::FETCH_OBJ);
                $p = new Terminal();

                if ($result)
                {
                    $p->setIdTerminal($result->idTerminal);
                    $pstmt->closeCursor();
                    return $p;
                }
                $pstmt->closeCursor();
                return null;
            }

        }
        catch (PDOException $ex){
            ?>
            <script>console.log("Error createDAO:  <?= $ex->getMessage()?>")</script>
            <?php
        }

            


    }

}





