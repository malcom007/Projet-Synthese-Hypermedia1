<?php
//equire_once './modele/IdGenerator.php';
//require_once './modele/classes/terminal/Terminal.php';

class TerminalCarte
{
    private $_idTransaction,$_idCarte,$_idTerminal,$_credit,$_dateTransaction;
    public function loadFromObjet($obj)
    {

        $this->_idTransaction= $obj->idTransaction;
        $this->_idCarte=$obj->idCarte;
        $this->_idTerminal=$obj->idTerminal;
        $this->_credit=$obj->credit;
        $this->_dateTransaction=$obj->dateTransaction;
    }

    /**
     * @param mixed $idTransaction
     */
    public function setIdTransaction($idTransaction)
    {
        $this->_idTransaction = $idTransaction;
    }

    /**
     * @param mixed $idCarte
     */
    public function setIdCarte($idCarte)
    {
        $this->_idCarte = $idCarte;
    }

    /**
     * @param mixed $idTerminal
     */
    public function setIdTerminal($idTerminal)
    {
        $this->_idTerminal = $idTerminal;
    }

    /**
     * @param mixed $dateTransaction
     */
    public function setDateTransaction($dateTransaction)
    {
        $this->_dateTransaction = $dateTransaction;
    }

    /**
     * @param mixed $credit
     */
    public function setCredit($credit)
    {
        $this->_credit = $credit;
    }

    /**
     * @return mixed
     */
    public function getDateTransaction()
    {
        return $this->_dateTransaction;
    }

    /**
     * @return mixed
     */
    public function getCredit()
    {
        return $this->_credit;
    }

    /**
     * @return mixed
     */
    public function getIdTerminal()
    {
        return $this->_idTerminal;
    }

    /**
     * @return mixed
     */
    public function getIdCarte()
    {
        return $this->_idCarte;
    }

    /**
     * @return mixed
     */
    public function getIdTransaction()
    {
        return $this->_idTransaction;
    }
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