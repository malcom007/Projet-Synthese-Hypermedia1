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
/*
$adress = new Adresse();
$adress->createAdresse("rdc" ,"mayala","Herady","selembao","kinshasa","kin-243");
$Trans = new Transporteur();
$Trans->addTransporteur("social","","5142081205");
var_dump($adress);
var_dump($Trans);

$adres=TransporteurDAO::create($adress,$Trans);

var_dump($adress);
var_dump($Trans);
*/
/****
 *--------------------------------------------------------------------------------------------------------------
 *                                              DELETE
 * --------------------------------------------------------------------------------------------------------------
 */

//Stockage  resulte de la recherche avec l'ID

$transpo=TransporteurDAO::find('bea42e');
//A supprimer, juste pour le teste
echo "<BR>OBJET RECUPERE DE LA BASE DE DONNÉE</br>";
//A supprimer
var_dump($transpo);



//Si tableau obtenu a l'aide de la recherche n'est pas null, on continue
if (!empty($transpo)){


    //On crée un objet qui servira pour le parametre de suppression
    $toDelete = new Transporteur();

    //On attribue l'idTerminal avec le tableau de Type Terminal
    $toDelete->setIdTransporteur($transpo[0]->getIdTransporteur());

    //On supprimer l'objet
    TransporteurDAO::delete($toDelete);



}
