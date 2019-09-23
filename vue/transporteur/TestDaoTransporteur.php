<?php
require_once '../../modele/TransporteurDAO.php';
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
var_dump($test);
/*
$Trans = new Transporteur();

$Trans->addTransporteur("social","","5142081205");
var_dump($Trans);

$tran = TransporteurDAO::create($Trans);

var_dump($Trans);*/