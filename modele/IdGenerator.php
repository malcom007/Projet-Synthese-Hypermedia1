<?php


class MyGenerator
{


    private function __construct()
    {
    }

    /***
     * Methode permettant de générer les id
     * @return bool|string
     */
    public static function getIdGenerated()
    {
        //le md5 permet de hacher notre code, ca permet de cacher les parametre données au niveau de la fonction
        //rand permet d'obtenir un nombre aleatoire entre 0 et 100 000
        return substr(md5(uniqid(rand(0,100000))),0,6);
    }

    public static function getDateNow()
    {
        date_default_timezone_set("America/Montreal");
        return date('Y-m-d G:i:s');
    }

    /***
     * Methode permettant de Hacher le mot de pass
     * @param $password
     * @return bool|string
     */
    public static function getPasswordHached($password){
        return password_hash($password, PASSWORD_BCRYPT );
    }

    /***
     * Methode permettant de verifer le mot de pass de saisie par l'user avec celui de la BD haché
     * @param $entryPWD
     * @param $hashPwd
     * @return bool
     */
    public static function compareHachedPassword($entryPWD,$hashPwd){
        //On verifie le mot de passe clair avec celui haché dans la base de donnée
        if (password_verify($entryPWD, $hashPwd)) {
            return true;
        } else {
            return false;
        }
    }

    /***
     * Methode permettant de générer la date d'expiration Today+2ans
     * @return false|string
     */
    public static function getDate2YearLater(){
        $expireDate =date("Y-m-d H:i:s",strtotime(date("Y-m-d H:i:s")." +3 years -1 days"));

        return  $expireDate;
    }

    /***
     * Methode permettant de générer 30min
     * @return false|string
     */
    public static function getTodayPlus30Minutes(){
        $expireDate =date("Y-m-d H:i:s",strtotime(date("Y-m-d H:i:s")." +30 minutes "));

        return  $expireDate;
    }

}