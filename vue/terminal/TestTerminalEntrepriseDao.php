<?php
//

require_once '../../modele/TerminalDAO.php';
require_once '../../modele/TerminalEntrepriseDAO.php';
require_once '../../modele/InputValidation.php';

/****
 *--------------------------------------------------------------------------------------------------------------
 *                                              AJOUT TERMINAL ENTREPRISE
 * --------------------------------------------------------------------------------------------------------------
 */
try{
    //Verification du terminal dans l'inventaire
    $idTermininal = TerminalDAO::findById('10db98');

    var_dump($idTermininal);

    if (empty($idTermininal)){
        throw new Exception("Aucun terminal trouvé avec ce ID ");
    }

    //Verification id du transporteur si enregistré
    $idEntreprise = TransporteurDAO::find('00964B');


    //On redefinit la variable $idTerminal pour ne garder que l'id du Terminal
    $idTermininal= $idTermininal[0]->getIdTerminal();

    if (empty($idEntreprise)){
        throw new Exception("Aucun Transport trouvé avec ce ID ");
    }

    //On redefinit la variable $idEntreprise pour ne garder que l'id de l'entreprise
    $idEntreprise = $idEntreprise[0]->getIdTransporteur();
    var_dump($idEntreprise);

    //On un crée un objet Terminal Entreprise
    $monTerminal = new TerminalEntreprise();

    $monTerminal->addTerminal($idTermininal,$idEntreprise,"jea","125ages");

    TerminalEntrepriseDAO::addTerminal($monTerminal);

}
catch (Exception $ex){

    echo $ex->getMessage();
    exit();
}



//$test1= TerminalEntrepriseDAO::create($monTerminal);

$codeVerification = MyGenerator::getIdGenerated();
$message="Veuillez saisir ce code de vérification pour terminer votre inscription chez SwipnGo :  ".$codeVerification;



/****
 *--------------------------------------------------------------------------------------------------------------
 *                                              RECHERCHE PAR IDTERMINAL and IDENTREPRISE
 * --------------------------------------------------------------------------------------------------------------
 */
$test=TerminalEntrepriseDAO::findAllByIdEntreprise('00964B');

var_dump($test);



//S'il n'y a aucune donnée
if (empty($test)){
  echo "Aucune données";
}else{
    foreach ($test as $item){
        echo $item->getIdTerminal()."<br>";
        echo $item->getLogin()."<br>";
        echo $item->getMacAdresse()."<br>";

    }
}

/****
 *--------------------------------------------------------------------------------------------------------------
 *                                              DELETE
 * --------------------------------------------------------------------------------------------------------------
 */

//Stockage  resulte de la recherche avec l'ID
$terminal=TerminalEntrepriseDAO::findByIdTerminalByIdEntreprise('7522F1', '00964B');

var_dump($terminal);

//A supprimer, juste pour le teste
echo "<BR>OBJET RECUPERE DE LA BASE DE DONNÉE</br>";
//A supprimer
var_dump($terminal);



//Si tableau obtenu a l'aide de la recherche n'est pas null, on continue
if (!empty($terminal)){


    //On crée un objet qui servira pour le parametre de suppression
    $toDelete = new TerminalEntreprise();

    //On attribue l'idTerminal avec le tableau de Type Terminal
    $toDelete->setIdTerminal($terminal[0]->getIdTerminal());
    $toDelete->setIdEntreprise($terminal[0]->getIdEntreprise());

    var_dump($toDelete);

    //On supprimer l'objet
    TerminalEntrepriseDAO::delete($toDelete);


}

/****
 *--------------------------------------------------------------------------------------------------------------
 *                                              UPDATE TERMINAL
 * --------------------------------------------------------------------------------------------------------------
 */

//Stockage  resulte de la recherche avec l'ID
$terminal=TerminalEntrepriseDAO::findByIdTerminalByIdEntreprise('7522F1', '1D4BA6');


//A supprimer, juste pour le teste
echo "<BR>OBJET RECUPERE DE LA BASE DE DONNÉE</br>";
//A supprimer
var_dump($terminal);



//Si tableau obtenu a l'aide de la recherche n'est pas null, on continue
if (!empty($terminal)){


    //On crée un objet qui servira de parametre pour la mise à jour
    $toUpdate = new TerminalEntreprise();

    //On fait des Setter  avec les valeurs du tableau de Type Terminal
    $toUpdate->setIdTerminal($terminal[0]->getIdTerminal());
    $toUpdate->setIdEntreprise($terminal[0]->getIdEntreprise());
    $toUpdate->setStatut(0);
    $hashPwd = MyGenerator::getPasswordHached('Malcom');

    $toUpdate->setPassword($hashPwd);

    var_dump($toUpdate);


    //On supprimer l'objet
    TerminalEntrepriseDAO::update($toUpdate);
    echo "Completé";


}