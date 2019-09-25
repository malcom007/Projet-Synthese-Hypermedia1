<?php
require_once '../../modele/AdminDAO.php';
require_once '../../modele/InputValidation.php';


/****
 *--------------------------------------------------------------------------------------------------------------
 *                                              AJOUT TERMINAL ENTREPRISE
 * --------------------------------------------------------------------------------------------------------------
 */
/*
$test= new Admin();

$test->createNewAdmin('Junior','Malcom','4502094445','malcom007','Malcom');

$myTest = AdminDAO::create($test, JSON_FORCE_OBJECT);

$myTest=AdminDAO::findById();

$someArray=array();

foreach ($myTest AS $item ){
    $maPersonne = new Personnes();
    $maPersonne->setId($item->getId());
    var_dump($maPersonne);
    die();
    $maPersonne->setNom($item->getNom()) ;
    array_push($someArray, $maPersonne);
}

$myJason = json_encode($someArray,JSON_FORCE_OBJECT);



$test = InputValidation::nameValidation("adely");

if ($test == false){
    echo 'ca ne va pas';
}else
    echo $test;
*/

/****
 *--------------------------------------------------------------------------------------------------------------
 *                                               COUNT CLIENT ACTIVE
 * --------------------------------------------------------------------------------------------------------------
 */

$test = AdminDAO::countAllInactiveClients();
echo $test;

