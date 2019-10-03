<?php

require_once '../../modele/CartesDAO.php';
require_once '../../modele/CartesUsagersDAO.php';
require_once '../../modele/AdminDAO.php';
require_once '../../modele/UsagersDAO.php';

if (is_null(Database::getInstance())) {
    echo 'pas de conexion';
}
//$test->createNewAdmin('Junior','Malcom','4502094445','malcom007','Malcom');

//creation d'un usager
$user = new Usagers();
$user->createNewUsager("awa", "Diouf", "500 000 0000", "awa@diof.name", "awadiouf");
echo '<pre>';
//var_dump($user);
echo '<pre>';
//$mdp = $user->getPassword();
//$mdpCrupte = MyGenerator::getPasswordHached($mdp);
//var_dump($user);
//var_dump($mdpCrupte);
//$user1=PersonneDAO::create($user);

$usagerO = UsagersDAO::create($user);
echo '<pre>';
var_dump($usagerO);
echo '<pre>';
$user1 = new Usagers();
$user1->createNewUsager("aida", "Ba", "1231212320", "aida@ba.name", "aidaba");
echo '<pre>';
//var_dump($user1);
echo '<pre>';
//$user1p=PersonneDAO::create($user1);
$usagerO1 = UsagersDAO::create($user1);
echo '<pre>';
var_dump($usagerO1);
echo '<pre>';

//creation d'une carte
$carte = new Cartes();
$carte->createCarte('premium');
//var_dump($carte);
$carteO = CartesDAO::create($carte);
//var_dump($carteO);
$carte1 = new Cartes();
$carte1->createCarte('classique');
//var_dump($carte1);
$carte2 = new Cartes();
$carte2->createCarte('premium');
//var_dump($carte2);
$carte3 = new Cartes();
$carte3->createCarte('famille');
//var_dump($carte3);


$carteO = CartesDAO::create($carte);
//var_dump($carteO);
$carteO1 = CartesDAO::create($carte1);
//var_dump($carteO1);
$carteO2 = CartesDAO::create($carte2);
//var_dump($carteO2);
$carteO3 = CartesDAO::create($carte3);
//var_dump($carteO3);


/*



//creation D,une transaction
$transaction = new UsagerCartes();
$transaction->createNewTransaction("ab9cfa", "8400F64", "10");
var_dump($transaction);
$transaction->addTitre("20");
$transaction->getTitreAjouter();
$transaction->removeTitre("5");
$transaction->getTitreAjouter();
var_dump($transaction);


//test CartesDAO
$carteDAO = new CartesDAO();
$carteDAO->create($carte);
var_dump($carteDAO);


//$mapers=PersonneDAO::create($maPersonne);

//var_dump($mape.
//rs);<?php
*/