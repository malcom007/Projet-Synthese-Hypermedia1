<?php
require_once '../../modele/TransporteurDao.php';
//$Dao = new TransporteurDao();
//$test= TransporteurDao::findAll();

//echo $tes->getIdTransporteur();

$test= TransporteurDao::find("021558");
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

/*$perso = new Transporteur();

$perso->addtransporteur("social","","5142081205");
var_dump($perso);

$tran = TransporteurDao::create($perso);

var_dump($perso);*/