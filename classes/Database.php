<?php


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
        if (self::$instance == null)
        {
            self::$instance = new PDO("mysql:host=".Config::DB_HOST.";dbname=".Config::DB_NAME."",
                Config::DB_USER,
                Config::DB_PWD);
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