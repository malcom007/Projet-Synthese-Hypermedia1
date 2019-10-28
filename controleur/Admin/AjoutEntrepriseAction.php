<?php
require_once ('./controleur/Action.interface.php');
require_once('./controleur/RequirePRGAction.php');

class AjoutEntrepriseAction implements Action, RequirePRGAction
{
    public  function execute()
    {
        $idEntreprise=MyGenerator::getIdGenerated();
        $idAdresse= MyGenerator::getIdGenerated();

        $DaoEn= new TransporteurDAO();
        if (ISSET($_REQUEST["bnok"])) {
            require_once('./modele/config/Autoloader.php');
            try {
                // run your code here

            $Entreprise = new Transporteur();

            $Adresse= new Adresse();

               $Adresse->setIdAdresses($idAdresse);
               $Adresse->setRue($_REQUEST['rue']);
               $Adresse->setQuartier($_REQUEST['quartier']);
               $Adresse->setCommune($_REQUEST['commune']);
               $Adresse->setVille($_REQUEST['ville']);
               $Adresse->setCodePostal($_REQUEST['postal']);
               $Adresse->setPays($_REQUEST['pays']);

            $Entreprise->setIdTransporteur($idEntreprise);

            $Entreprise->setRaisonSocial($_REQUEST['raison']);
            $Entreprise->setTelephone($_REQUEST['tel']);

            $DaoEn->create($Adresse,$Entreprise);
            }
            catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        return "Admin/DashAdmin";
    }
    public function valide()
    {
        $result = true;
        if ($_REQUEST['raison'] == "" )
        {

            $result = false;
        }
        if ($_REQUEST['login'] == "")
        {
            $_REQUEST["field_messages"]["login"] = "loginpasse obligatoire";
            $result = false;
        }
        if ($_REQUEST['pswrd'] == "")
        {
            $_REQUEST["field_messages"]["Pswrd"] = "Mot de passe obligatoire";
            $result = false;
        }
        if ($_REQUEST['pswrd'] != $_REQUEST['pswrd2'])
        {
            $_REQUEST["field_messages"]["pswrd2"] = "Les 2 mots de passe doivent &ecirc;tre identiques";
            $result = false;
        }
        return $result;
    }

}