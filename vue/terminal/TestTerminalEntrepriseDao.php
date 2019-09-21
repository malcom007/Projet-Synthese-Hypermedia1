<?php
//

require_once '../../modele/TerminalDAO.php';
require_once '../../modele/TerminalEntrepriseDAO.php';

try{
    $idVerify = TerminalEntrepriseDAO::findById('7522F1');
    if (empty($idVerify)){
        throw new Exception("Aucun terminal trouvé avec ce ID");
    }

    $idTermininal= $idVerify[0]->getIdTerminal();
}
catch (Exception $ex){
    echo $ex->getMessage();
}

var_dump($idVerify);

$monTerminal = new TerminalEntreprise();



$monTerminal->addTerminal($idTermininal,"Jean","jea","125ages");




//Celui-ci proviendra de la base de donnée
$monTerminal->setMacAdresse("A15d");
$monTerminal->setLibelle("Description produit");

//$test1= TerminalEntrepriseDAO::create($monTerminal);


var_dump($monTerminal);
die();


/****
 *--------------------------------------------------------------------------------------------------------------
 *                                              RECHERCHE PAR IDTERMINAL
 * --------------------------------------------------------------------------------------------------------------
 */
$test=TerminalDAO::findById();
//S'il n'y a aucune donnée
if (empty($test)){
    echo "Aucune données";
}else{
    foreach ($test as $item){
        echo $item->getIdTerminal()."<br>";
        echo $item->getLibelle()."<br>";
        echo $item->getMacAdresse()."<br>";
    }
}
//var_dump($test);
/****
 *--------------------------------------------------------------------------------------------------------------
 *                                              DELETE
 * --------------------------------------------------------------------------------------------------------------
 */

//Stockage  resulte de la recherche avec l'ID
$terminal=TerminalDAO::findById('8122C3');

//A supprimer, juste pour le teste
echo "<BR>OBJET RECUPERE DE LA BASE DE DONNÉE</br>";
//A supprimer
var_dump($terminal);



//Si tableau obtenu a l'aide de la recherche n'est pas null, on continue
if (!empty($terminal)){


    //On crée un objet qui servira pour le parametre de suppression
    $toDelete = new Terminal();

    //On attribue l'idTerminal avec le tableau de Type Terminal
    $toDelete->setIdTerminal($terminal[0]->getIdTerminal());

    //On supprimer l'objet
    TerminalDAO::delete($toDelete);


}

/****
 *--------------------------------------------------------------------------------------------------------------
 *                                              UPDATE TERMINAL
 * --------------------------------------------------------------------------------------------------------------
 */

//Stockage  resulte de la recherche avec l'ID
$terminal=TerminalDAO::findById('936D80');


//A supprimer, juste pour le teste
echo "<BR>OBJET RECUPERE DE LA BASE DE DONNÉE</br>";
//A supprimer
var_dump($terminal);



//Si tableau obtenu a l'aide de la recherche n'est pas null, on continue
if (!empty($terminal)){


    //On crée un objet qui servira de parametre pour la mise à jour
    $toUpdate = new Terminal();

    //On fait des Setter  avec les valeurs du tableau de Type Terminal
    $toUpdate->setIdTerminal($terminal[0]->getIdTerminal());
    $toUpdate->setPrix(200.00);
    $toUpdate->setMacAdresse("A452985");
    $toUpdate->setLibelle("Mise a jour fait");


    //On supprimer l'objet
    TerminalDAO::update($toUpdate);
    echo "Completé";


}