<?php

require_once '../../UsagerCartes.php';
require_once '../UsagerCartesDAO.php';
require_once '../CartesDAO.php';

//creation d'une carte
$carte = new Cartes();
$carte->createCarte('classique');
var_dump($carte);

$carte->activerCarte();
var_dump($carte);
$carteO = CartesDAO::create($carte);
var_dump($carteO);

//creation d'un usager
$user = new Usagers();
$user->createNewUsager("awa", "Diouf", "500 000 0000", "awa@diof.name", "awadiouf", "1");
var_dump($user);
$mdp = $user->getPassword();
$mdpCrupte = MyGenerator::getPasswordHached($mdp);
var_dump($user);
var_dump($mdpCrupte);


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
