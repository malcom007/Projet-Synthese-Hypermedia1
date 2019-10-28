<?php
require_once ('./controleur/Action.interface.php');
require_once('./controleur/RequirePRGAction.php');


class AjouterTerminalAction implements Action, RequirePRGAction
{
    public  function execute()
    {
        $daoA= new TerminalEntrepriseDAO();
        /*if (!$this->valide())
            return "";*/
        if (ISSET($_REQUEST["bnok"])) {
            require_once('./modele/config/Autoloader.php');
            $idTermininal = TerminalDAO::findById($_REQUEST['idTerminal']);
            $idEntreprise = TransporteurDAO::find('h545gf');
            if (empty($idTermininal)) {
                throw new Exception("Aucun terminal trouvé avec ce ID");
            }
            $idEntreprise = $idEntreprise[0]->getIdTransporteur();

            $monTerminal = new TerminalEntreprise();
            $monTerminal->setIdTerminal($_REQUEST['idTerminal']);
            $monTerminal->setIdEntreprise($idEntreprise);
            $monTerminal->setLogin($_REQUEST['login']);
            $monTerminal->setPassword($_REQUEST['pswrd']);
            $daoA->addTerminal($monTerminal);



        }


        return "transporteur/dashboard";
    }
    public function valide()
    {
        $result = true;
        if ($_REQUEST['idTerminal'] == "")
        {
            $_REQUEST["field_messages"]["idTerminal"] = "Donnez l'id du terminal";
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