<?php
require_once ('./controleur/Action.interface.php');


require_once('../../modele/config/Autoloader.php');

class AjouterTerminalAction implements Action
{
    public  function execute()
    {

        $daoA= new TerminalEntrepriseDAO();
        if (ISSET($_REQUEST["bnok"])) {
            $idTermininal = TerminalEntrepriseDAO::findById($_REQUEST['idTerminal']);

            if (empty($idTermininal)) {
                throw new Exception("Aucun terminal trouvé avec ce ID");
            }
            $idTermininal = $idTermininal[0]->getIdTerminal();
            var_dump($idTermininal);
            $idEntreprise = TransporteurDAO::find('h545gf');
            var_dump($idEntreprise);
            if (empty($idEntreprise)) {
                throw new Exception("Aucun Transport trouvé avec ce ID");
            }
            $idEntreprise = $idEntreprise[0]->getIdTransporteur();


            $monTerminal = new TerminalEntreprise();
            $monTerminal->setIdTerminal($idTermininal);
            $monTerminal->setIdEntreprise($idEntreprise);
            $monTerminal->setLogin($_REQUEST['login']);
            $monTerminal->setPassword($_REQUEST['pswrd']);
            $daoA->addTerminal($monTerminal);

            die();
        }

        return "transporteur/dashboard";
    }



}