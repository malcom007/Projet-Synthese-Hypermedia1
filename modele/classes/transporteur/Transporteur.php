<?php
require_once '../../modele/IdGenerator.php';

class Transporteur
{
    private $_IdTransporteur,$_RaisonSocial,$_IdAdresse,$_Telephone,$_DateCreation,$_DateModification;

    public function __construct()
    {
    }

    public function addTransporteur($RaisonSocial,$idAdresse,$telephone)
    {

        $this->_IdTransporteur = MyGenerator::getIdGenerated();
        $this->_RaisonSocial=$RaisonSocial;
        $this->_IdAdresse=$idAdresse;
        $this->_Telephone=$telephone;
        $this->_DateCreation=MyGenerator::getDateNow();
        $this->_DateModification=MyGenerator::getDateNow();
    }

    /**
     * @param mixed $IdTransporteur
     */
    public function setIdTransporteur($IdTransporteur)
    {
        $this->_IdTransporteur = $IdTransporteur;
    }

    /**
     * @param mixed $RaisonSocial
     */
    public function setRaisonSocial($RaisonSocial)
    {
        $this->_RaisonSocial = $RaisonSocial;
    }

    /**
     * @return mixed
     */
    public function getIdAdresse()
    {
        return $this->_IdAdresse;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->_Telephone;
    }

    /**
     * @return mixed
     */
    public function getRaisonSocial()
    {
        return $this->_RaisonSocial;
    }

    /**
     * @return mixed
     */
    public function getIdTransporteur()
    {
        return $this->_IdTransporteur;
    }

    /**
     * @return mixed
     */
    public function getDateModification()
    {
        return $this->_DateModification;
    }

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->_DateCreation;
    }

    /**
     * @param mixed $DateModification
     */
    public function setDateModification($DateModification)
    {
        $this->_DateModification = $DateModification;
    }

    /**
     * @param mixed $DateCreation
     */
    public function setDateCreation($DateCreation)
    {
        $this->_DateCreation = $DateCreation;
    }

    /**
     * @param mixed $Telephone
     */
    public function setTelephone($Telephone)
    {
        $this->_Telephone = $Telephone;
    }

    /**
     * @param mixed $IdAdresse
     */
    public function setIdAdresse($IdAdresse)
    {
        $this->_IdAdresse = $IdAdresse;
    }

    /**
     * Methode permettant de créer une personne a partir d'un objet provenant de la base de donnée
     * @param mixed $obj
     */
    public function loadFromObjet($obj)
    {
        $this->_IdTransporteur= $obj->idTransporteur;
        $this->_RaisonSocial = $obj->RaisonSociale;
        $this->_IdAdresse = $obj->idAdresse;
        $this->_Telephone = $obj->telephone;
        $this->_DateCreation = $obj->dateCreation;
        $this->_DateModification = $obj->dateModification;
    }
    /**
     * Methode permettant de créer une personne a partir d'un tableau provenant de la base de donnée
     * @param mixed $tableau
     */
    public function loadFromArray($tableau)
    {
        $this->_IdTransporteur=$tableau["idtransporteur"];
        $this->_RaisonSocial =$tableau["RaisonSocial"];
        $this->_IdAdresse = $tableau["idadresse"];
        $this->_Telephone = $tableau["telephone"];
        $this->_DateCreation = $tableau["datecreation"];
        $this->_DateModification = $tableau["dateModificaton"];


    }
}