<?php
require_once '../../modele/TransporteurDAO.php';
require_once '../../modele/classes/Adresse.php';
/*
//$Dao = new TransporteurDao();
//$test= TransporteurDao::findAll();

//echo $tes->getIdTransporteur();

$test= TransporteurDao::find("");
var_dump($test);

if (empty($test)){
    echo "Aucune données";
}else{
   foreach ($test as $item){
       echo $item->getIdtransporteur()."<br>";
       echo $item->getRaisonSocial()."<br>";
       echo $item->getTelephone()."<br>";

    }
}
*/
$adress = new Adresse();
$adress->createAdresse("rdc" ,"mayala","Herady","selembao","kinshasa","kin-243");
$Trans = new Transporteur();
$Trans->addTransporteur("social","","5142081205");
var_dump($adress);
var_dump($Trans);

$adres=TransporteurDAO::create($adress,$Trans);

var_dump($adress);
var_dump($Trans);