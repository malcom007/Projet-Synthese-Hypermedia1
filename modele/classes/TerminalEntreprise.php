<?php
require_once '../../modele/IdGenerator.php';
require_once '../../modele/classes/Terminal.php';


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

    public function __construct()
    {
    }

    /***
     * ----------------------------------------------------------------------------------------------
     *                                     GETTER AND SETTER
     * ----------------------------------------------------------------------------------------------
     */

    /**
     * @return mixed
     */
    public function getIdTerminal()
    {
        return $this->getIdTerminal();
    }

    /**
     * @param mixed $IdTerminal
     */
    public function setIdTerminal($IdTerminal)
    {
        $this->_IdTerminal=$IdTerminal ;
    }

    /**
     * @return mixed
     */
    public function getMacAdresse()
    {
        return $this->getMacAdresse();
    }

    /**
     * En provenance de la base
     * @param mixed $MacAdresse
     */
    public function setMacAdresse($macAdresse)
    {
        $this->_MacAdresse=$macAdresse;
    }

    /**
     * @return mixed
     */
    public function getIdEntreprise()
    {
        return $this->_IdEntreprise;
    }

    /**
     * @param mixed $IdEntreprise
     */
    public function setIdEntreprise($IdEntreprise)
    {
        $this->_IdEntreprise = $IdEntreprise;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->_Statut;
    }

    /**
     * @param mixed $Statut
     */
    public function setStatut($Statut)
    {
        $this->_Statut = $Statut;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->_Login;
    }

    /**
     * @param mixed $Login
     */
    public function setLogin($Login)
    {
        $this->_Login = $Login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->_Password;
    }

    /**
     * @param mixed $Password
     */
    public function setPassword($Password)
    {
        $this->_Password = $Password;
    }

    /**
     * @return mixed
     */
    public function getDateActivation()
    {
        return $this->_DateActivation;
    }

    /**
     * @param mixed $DateActivation
     */
    public function setDateActivation($DateActivation)
    {
        $this->_DateActivation = $DateActivation;
    }

    /**
     * @return mixed
     */
    public function getDateModification()
    {
        return $this->_DateModification;
    }

    /**
     * @param mixed $DateModification
     */
    public function setDateModification($DateModification)
    {
        $this->_DateModification = $DateModification;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->_Libelle;
    }

    /**
     * @param mixed $Libelle
     */
    public function setLibelle($Libelle)
    {
        $this->_Libelle = $Libelle;
    }












}
