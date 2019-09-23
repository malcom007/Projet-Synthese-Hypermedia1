<?php
//
//require_once '../../modele/IdGenerator.php';
require_once '../../modele/PersonneDAO.php';
require_once '../../modele/InputValidation.php';

//$maPersonne = new Personnes();

$mail=InputValidation::phoneValidation('450 209 4445');
var_dump($mail);




//$hashPwd = MyGenerator::getPasswordHached("Malcom");

//echo $hashPwd."<br/>";


//$maPersonne->createNewPersonWeb("Marie","Claude","4502094447","malcom@live.com",$hashPwd,1);

//var_dump($maPersonne);

//echo MyGenerator::getTodayPlus30Minutes();




//$mapers=PersonneDAO::create($maPersonne);

//var_dump($mapers);


/****
 *--------------------------------------------------------------------------------------------------------------
 *                                              RECHERCHE PAR IDTERMINAL
 * --------------------------------------------------------------------------------------------------------------
 */
$test=PersonneDAO::findById('3f9494');
var_dump($test);
//S'il n'y a aucune donnée
if (empty($test)){
    echo "Aucune données";
}else{
    foreach ($test as $item){
       echo $item->getId()."<br>";
        echo $item->getPrenom()."<br>";
        echo $item->getPassword()."<br>";
    }
}
//var_dump($test);
/****
 *--------------------------------------------------------------------------------------------------------------
 *                                              DELETE
 * --------------------------------------------------------------------------------------------------------------
 */

////Stockage  resulte de la recherche avec l'ID
$personne=PersonneDAO::findById('7AF0AD');
//
////A supprimer, juste pour le teste
//echo "<BR>OBJET RECUPERE DE LA BASE DE DONNÉE</br>";
////A supprimer
echo "A supprimer";
var_dump($personne);
//
//
//
////Si tableau obtenu a l'aide de la recherche n'est pas null, on continue
if (!empty($personne)){

//    //On crée un objet qui servira pour le parametre de suppression
    $toDelete = new Personnes();
    //On attribue l'idTerminal avec le tableau de Type Terminal
$toDelete->setId($personne[0]->getId());
//
//    //On supprimer l'objet
    PersonneDAO::delete($toDelete);
//
//
}

/****
 *--------------------------------------------------------------------------------------------------------------
 *                                              UPDATE TERMINAL
 * --------------------------------------------------------------------------------------------------------------
 */

////Stockage  resulte de la recherche avec l'ID
$personne=PersonneDAO::findById('3f9494');
//
//
////A supprimer, juste pour le teste
//echo "<BR>OBJET RECUPERE DE LA BASE DE DONNÉE</br>";
////A supprimer
echo "A Supprimer";
var_dump($personne);
//
//
//
////Si tableau obtenu a l'aide de la recherche n'est pas null, on continue
if (!empty($personne)){
//
//
//    //On crée un objet qui servira de parametre pour la mise à jour
    $toUpdate = new Personnes();
//
//    //On fait des Setter  avec les valeurs du tableau de Type Terminal
    $toUpdate->setId($personne[0]->getId());
    $toUpdate->setDateModification(MyGenerator::getDateNow());
    $toUpdate->setActived(1);
    $toUpdate->setMail("newMalil@msn.com");

    //On force le hachage du nouveau mot de passe
    $toUpdate->setPassword(MyGenerator::getPasswordHached("junior"));

    $toUpdate->setTypeCompte(2);
    $toUpdate->setNumCell("4507683995");
    $toUpdate->setNom("Nouveau Nom");
    $toUpdate->setPrenom("Nouveau Prenom");

    var_dump($toUpdate);
//
//
//    //On supprimer l'objet
    PersonneDAO::update($toUpdate);
//    echo "Completé";
//
//
//









/***
 * --------------------------------------------------------------------------
 *                      HACHAGE DU MOT PASS ET VERIFICATION
 * --------------------------------------------------------------------------
 */
//on crypte le motDePass pour insérer dans la base de données
$hashPwd= crypt('jeaneu','$1$MK1!Dw8#k-% ');

//RECOMMANDER
$hashPwd= password_hash('malcom', PASSWORD_BCRYPT );
echo '<br>'.$hashPwd.'<br>';

//On verifie le mot de passe clair avec celui haché dans la base de donnée
if (password_verify('malcom', $hashPwd)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}


}