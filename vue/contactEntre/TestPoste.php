<?php
require_once '../../modele/ContactsEntrsDAO.php';


//$contacts = new ContactsEntrs ();

//$hashPwd = MyGenerator::getPasswordHached("ruskov");

//echo $hashPwd."<br/>";

$test= ContactsEntrsDAO::find("1283c9");
//var_dump($test);
/*
if (empty($test)){
    echo "Aucune données";
}else{
    foreach ($test as $item){
        echo $item->getIdContacte()."<br>";
        echo $item->getNumeroPoste()."<br>";
    }
}*/
//var_dump($test);


//
$contacte=ContactsEntrsDAO::find('d85305');

var_dump($contacte);
//
//
//
////Si tableau obtenu a l'aide de la recherche n'est pas null, on continue
if (!empty($contacte)) {
//
//
//    //On crée un objet qui servira de parametre pour la mise à jour
    $toUpdate = new ContactsEntrs();
    $toUpdate->setNumeroPoste(243);

    var_dump($toUpdate);
//
//
//    //On supprimer l'objet
    ContactsEntrsDAO::updat($toUpdate);
    echo "Completé";
}
//
//













