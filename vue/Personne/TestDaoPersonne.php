<?php
//
//require_once '../../modele/IdGenerator.php';
require_once '../../modele/PersonneDAO.php';
require_once '../../modele/InputValidation.php';

/*$maPersonne = new Personnes();


try {

    $name = InputValidation::nameValidation("jean");
    $lasName = InputValidation::nameValidation('Cloclo');

    if (!$name || !$lasName){
        throw new Exception("Format de nom invalide, minimum de 4 caractères et uniquemment de lettres");
    }

    $phone = InputValidation::phoneValidation("450 777 5588");

    if (!$phone){
        throw new Exception("Format telephone invalide, modele accepté:   ### ### ####");
    }

    $email = InputValidation::emailValidation("malcom@live.ca");

    if (!$email){
        throw new Exception("Format mail invalide, modele accepté:   yourmail@sample.com");
    }

    $typeCompte = 3;

    if ($typeCompte<1 || $typeCompte >3){
        throw new Exception("Aucun type de compte ne compte");
    }

    $hashPwd = MyGenerator::getPasswordHached("Malcom");
    var_dump($name,$lasName,$name,$phone,$email, $hashPwd);

}
catch (Exception $ex){
?>
    <script>console.log("Erreur  :    <?= $ex->getMessage()?>// ")</script>
<?php
}




$maPersonne->createNewPersonWeb($name,$lasName,$phone,$email,$hashPwd,$typeCompte);


$mapers=PersonneDAO::create($maPersonne);

var_dump($mapers);

*/
/****
 *--------------------------------------------------------------------------------------------------------------
 *                                              RECHERCHE PAR IDTERMINAL
 * --------------------------------------------------------------------------------------------------------------
 */
$user = "";

try {

    $userName = InputValidation::phoneValidation('4507775588');

    if (!$userName) {
        throw new Exception("Mot de passe ou username invalide");
    }

    $personne = PersonneDAO::connexion($userName);

    if (empty($personne)) {
        throw new Exception("Mot de passe ou username invalide");
    }

    $pwdEntry = "Malcom";

    //Compare le mot de passe avec celui de la passe de donnée
    $pwdEntry = MyGenerator::compareHachedPassword($pwdEntry, $personne[0]->getPassword());

    //Si le mot de passe est invalide
    if (!$pwdEntry) {
        throw new Exception("Mot de passe ou Username invalide");
    }

    //Si l'utilisateur n'a pas encore confirmé son inscription
    if ($personne[0]->getActived() == "0") {
        throw  new Exception("Vérifier votre téléphone, vous devez d'abord confirmer votre inscription!");
    }

    //On recupere le nom pour l'afficher sur profil
    $user = $personne[0]->getPrenom();

    var_dump($user);

} catch (Exception $ex) {
    echo $ex->getMessage();
    ?>
    <script> console.error("Erreur connexiopn:  <?= $ex->getMessage()?>")</script>
    <?php
}


die();
//S'il n'y a aucune donnée
if (empty($test)) {
    echo "Aucune données";
} else {
    foreach ($test as $item) {
        echo $item->getId() . "<br>";

        echo $item->getPrenom() . "<br>";
        echo $item->getPassword() . "<br>";
    }
}
//var_dump($test);
/****
 *--------------------------------------------------------------------------------------------------------------
 *                                              DELETE
 * --------------------------------------------------------------------------------------------------------------
 */

////Stockage  resulte de la recherche avec l'ID
$personne = PersonneDAO::findById('aed58fs');
//
////A supprimer, juste pour le teste
//echo "<BR>OBJET RECUPERE DE LA BASE DE DONNÉE</br>";
////A supprimer
echo "A supprimer";


//
//
//
////Si tableau obtenu a l'aide de la recherche n'est pas null, on continue
if (!empty($personne)) {

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
$personne = PersonneDAO::findById('3f9494');
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
if (!empty($personne)) {
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
    $hashPwd = crypt('jeaneu', '$1$MK1!Dw8#k-% ');

//RECOMMANDER
    $hashPwd = password_hash('malcom', PASSWORD_BCRYPT);
    echo '<br>' . $hashPwd . '<br>';

//On verifie le mot de passe clair avec celui haché dans la base de donnée
    if (password_verify('malcom', $hashPwd)) {
        echo 'Password is valid!';
    } else {
        echo 'Invalid password.';
    }


}