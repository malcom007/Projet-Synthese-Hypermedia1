<?php


class MyGenerator
{


    private function __construct()
    {
    }

    public static function getIdGenerated()
    {

        //le md5 permet de hacher notre code, ca permet de cacher les parametre données au niveau de la fonction
        //rand permet d'obtenir un nombre aleatoire entre 0 et 100 000
        return substr(md5(uniqid(rand(0,100000))),0,6);

    }

    public static function getDateNow()
    {
        date_default_timezone_set("America/Montreal");
        return date('d-m-Y G:i:s');
    }

}