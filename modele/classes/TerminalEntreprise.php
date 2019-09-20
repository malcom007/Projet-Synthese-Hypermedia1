<?php
require_once '../../modele/IdGenerator.php';

class TerminalEntreprise extends Terminal {

    private $_IdEntreprise,$_Statut,$_Login,$_Password, $_DateActivation,$_DateModification;

    public function addTerminal($idTerminal, $idEntreprise,$login,$password){
        $this->setIdTerminal($idTerminal);
        $this->_IdEntreprise =$idEntreprise;
        $this->_DateActivation = MyGenerator::getDateNow();
        $this->_DateModification = MyGenerator::getDateNow();
        $this->_Statut=1;
        $this->_Login=$login;
        $this->_Password=$password;
    }





}
