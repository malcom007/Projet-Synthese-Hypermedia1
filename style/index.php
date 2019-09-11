<?php
require_once ('../classes/Database.php');
require_once ('../included/config/Config.php');

try
{
    $db = Database::getInstance();
    echo "Cool";
}
catch (PDOException $e){
    echo "erreur de connexion: ";
}

