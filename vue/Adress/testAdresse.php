<?php
require_once '../../modele/AdressDao.php';
require_once '../../modele/classes/Adresse.php';
$adress = new Adresse();
$adress->createAdresse("rdc" ,"mayala","Herady","selembao","kinshasa","kin-243");
var_dump($adress);
$adres=AdressDao::addAdress($adress);
var_dump($adress);
