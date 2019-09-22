<?php
require_once '../../modele/ContactsEntrsDAO.php';


$contacts = new ContactsEntrs();

$hashPwd = MyGenerator::getPasswordHached("ruskov");

echo $hashPwd."<br/>";

$contacts->createcontact("ruskov","mapipo","541554467","ruskov@live.com",$hashPwd,1,"514");

echo 'Personne new';
var_dump($contacts);

//echo MyGenerator::getTodayPlus30Minutes();

$mapers=ContactsEntrsDAO::create($contacts);
