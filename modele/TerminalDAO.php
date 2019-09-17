<?php

require_once '/classes/Database.php';
require_once '/classes/Terminal.php';

class TerminalDAO{


    /***
     * Methode permettant de trouver un Terminal par Id et retourne un objet
     * @param $id
     * @return Terminal|null
     */
    public static function find($id)
    {
        $db = Database::getInstance();


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





