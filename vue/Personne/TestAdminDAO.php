<?php
require_once '../../modele/AdminDAO.php';
require_once '../../modele/InputValidation.php';


$test= new Admin();



//$test->createNewAdmin('Junior','Malcom','4502094445','malcom007','Malcom');


//$myTest = AdminDAO::create($test, JSON_FORCE_OBJECT);

$myTest = AdminDAO::creditOfDay();

var_dump($myTest);
die;

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
var_dump($myJason);
die();


$test = InputValidation::nameValidation("adely");
var_dump($test);
if ($test == false){
    echo 'ca ne va pas';
}else
    echo $test;

