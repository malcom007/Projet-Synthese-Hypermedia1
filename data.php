<?php

header('Content-Type : application/Json');
require_once 'modele/classes/Database.php';

$request = "SELECT MONTH(dateTransaction) as mois ,sum(credit) somme FROM `termicartes` inner JOIN cartesusagers ON termicartes.idCarte = cartesusagers.idCarte WHERE cartesusagers.idUsager='5cdc7f'  GROUP BY MONTH(dateTransaction)";
$db = Database::getInstance();
$row=$db->prepare($request);

$row->execute();
//$dbdata = array();
foreach ($row as $result)
{
        $dbdata = $result['mois'];
        $dbdata = $result['somme'];
          //array_push($json_data,$dbdata);
}

 echo json_encode($dbdata);
?>