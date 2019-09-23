<?php
require_once '../../modele/IdGenerator.php';

class Terminal
{
    private $_IdTerminal,$_Libelle,$_MacAdresse,$_Prix, $_DateAjout;




    public function __construct()
    {
    }

    public function addTerminalInventory($libelle, $macAdresse,$prix)
    {
        $this->_DateAjout=MyGenerator::getDateNow();
        $this->_IdTerminal= MyGenerator::getIdGenerated();
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