<?php

//require_once '/config/config.php';

//Pour mon test dans le dossier racine
require_once 'modele/config/config.php';

class Database
{
    private static $instance = null;

    /*
    * On le met en private pour eviter la cration de plusieur objet
    */
    private function __construct()
    {
    }

    /*
     * Methode permettant d'établir une connexion a la base de donnée
     * */
    public static function getInstance()
    {
        try{
            if(self::$instance == null) {
                self::$instance = new PDO(
                    "mysql:host=".Config::DB_HOST.";dbname=".Config::DB_NAME."",
                    Config::DB_USER,
                    Config::DB_PWD,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            }
        }
        catch (PDOException $ex){
            ?>
            <script>console.log("Erreur de connexion BD :    <?= $ex->getMessage()?>  Merci")</script>
            <?php
        }

        return self::$instance;
    }

    /*
     * Methode permettant d'arreter la connexion a la base de donnée
     * **/
    public static function close()
    {
        self::$instance=null;
    }



}

