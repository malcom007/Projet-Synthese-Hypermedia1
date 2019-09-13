<?php
require_once './included/IdGenerator.php';
require_once './classes/Database.php';
require_once '/classes/Personnes.php';




try
{
    $test= new Personnes();

    $test->setId(MyGenerator::getIdGenerated());



    echo $test->getId();

}
catch (Exception $e)
{
    echo "erreur";
}


