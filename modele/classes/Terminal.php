<?php


class Terminal
{
    private $_IdTerminal,$_Libelle,$_MacAdresse,$_Prix, $_DateAjout;

    private $_IdEntreprise,$_Statut,$_Login,$_Password, $_DateActivation,$_DateModification;


    public function __construct()
    {
    }

    public function addTerminalInventory($libelle, $macAdresse,$prix)
    {
        $this->_DateAjout=MyGenerator::getDateNow();
        $this->_IdTerminal= strtoupper(MyGenerator::getIdGenerated());
        $this->_Libelle=$libelle;
        $this->_MacAdresse=strtoupper($macAdresse);

        //On arrondi a 2chiffre après la virgule
        $this->_Prix=round($prix,2);
    }



    /**
     * Methode permettant de créer un Terminal a partir d'un objet provenant de la base de donnée
     * @param mixed $obj
     */
    public function loadFromObjet($obj)
    {

        $this->_Statut = $obj->statut;
        $this->_IdEntreprise - $obj->idEntreprise;
        $this->_Login = $obj->login;
        $this->_Password = $obj->password;
        $this->_DateActivation = $obj->dateActivation;
        $this->_DateModification = $obj->dateModification;
        $this->_DateAjout=$obj->dateAjout;
        $this->_IdTerminal= $obj->idTerminal;
        $this->_Libelle=$obj->libelle;
        $this->_MacAdresse=$obj->macAdress;
        //On arrondi a 2chiffre après la virgule
        $this->_Prix=round($obj->prix,2);

    }


    /**
     * Methode permettant de créer un Terminal a partir d'un tableau provenant de la base de donnée
     * @param mixed $tableau
     */
    public function loadFromArray($tableau)
    {
        $this->_Statut = $tableau['statut'];
        $this->_IdEntreprise - $tableau['idEntreprise'];
        $this->_Login = $tableau['login'];
        $this->_Password = $tableau['password'];
        $this->_DateActivation = $tableau['dateActivation'];
        $this->_DateModification = $tableau['dateModification'];
        $this->_DateAjout=$tableau['dateAjout'];
        $this->_IdTerminal= $tableau['idTerminal'];
        $this->_Libelle=$tableau['libelle'];
        $this->_MacAdresse=$tableau['macAdress'];
        //On arrondi a 2chiffre après la virgule
        $this->_Prix=round($tableau['prix'],2);


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
    public function getIdTerminal()
    {
        return $this->_IdTerminal;
    }

    /**
     * @param mixed $IdTerminal
     */
    public function setIdTerminal($IdTerminal)
    {
        $this->_IdTerminal = $IdTerminal;
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

    /**
     * @return mixed
     */
    public function getMacAdresse()
    {
        return $this->_MacAdresse;
    }

    /**
     * @param mixed $MacAdresse
     */
    public function setMacAdresse($MacAdresse)
    {
        $this->_MacAdresse = $MacAdresse;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->_Prix;
    }

    /**
     * @param mixed $Prix
     */
    public function setPrix($Prix)
    {
        $this->_Prix = $Prix;
    }

    /**
     * @return mixed
     */
    public function getDateAjout()
    {
        return $this->_DateAjout;
    }

    /**
     * @param mixed $DateAjout
     */
    public function setDateAjout($DateAjout)
    {
        $this->_DateAjout = $DateAjout;
    }





}