<?php
require_once('./controleur/Action.interface.php');

class DashboardTerminalAction implements Action {
	public function execute(){

	    if (!$this->valide()){
	        return 'terminalogin';
        }


        return "dashboardTerminal";



	}

	public function valide(){

	    //Récuperation données saisie par user
        $usernam = $_REQUEST['fuser'];
        $pwd = $_REQUEST['fpwd'];
        




        $terminalLogin=TerminalEntrepriseDAO::findById($usernam);

        if (empty($terminalLogin)){
            $_REQUEST['msg']="ereerur";
            return false;
        }



        $terminalTransporteur = new TerminalEntreprise();

        $terminalTransporteur=$terminalLogin[0];



        $pwdVerify=MyGenerator::compareHachedPassword($pwd,$terminalTransporteur->getPassword());

        if (!$pwdVerify){
            return false;
        }

        return true;


    }
}
