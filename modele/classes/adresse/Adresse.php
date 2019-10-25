<?php


class Adresse
{
private $_IdAdresses,$_Rue,$_Quartier,$_Commune,$_Ville,$_CodePostal,$_Pays;

    public function createAdresse($pays,$rue,$quartier,$commune,$ville,$codepostal)
    {


        $this->_IdAdresses= MyGenerator::getIdGenerated();
        $this->_Rue = $rue;
        $this->_Quartier = $quartier;
        $this->_Commune = $commune;
        $this->_Ville = $ville;
        $this->_CodePostal = $codepostal;
        $this->_Pays = $pays;
    }
    /**
     * @return mixed
     */
    public function getCodePostal()
    {
        return $this->_CodePostal;
    }

    /**
     * @return mixed
     */
    public function getCommune()
    {
        return $this->_Commune;
    }

    /**
     * @return mixed
     */
    public function getIdAdresses()
    {
        return $this->_IdAdresses;
    }

    /**
     * @return mixed
     */
    public function getQuartier()
    {
        return $this->_Quartier;
    }

    /**
     * @return mixed
     */
    public function getRue()
    {
        return $this->_Rue;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->_Ville;
    }

    /**
     * @return mixed
     */
    public function getPays()
    {
        return $this->_Pays;
    }

    /**
     * @param mixed $CodePostal
     */
    public function setCodePostal($CodePostal)
    {
        $this->_CodePostal = $CodePostal;
    }

    /**
     * @param mixed $Commune
     */
    public function setCommune($Commune)
    {
        $this->_Commune = $Commune;
    }

    /**
     * @param mixed $IdAdresses
     */
    public function setIdAdresses($IdAdresses)
    {
        $this->_IdAdresses = $IdAdresses;
    }

    /**
     * @param mixed $Pays
     */
    public function setPays($Pays)
    {
        $this->_Pays = $Pays;
    }

    /**
     * @param mixed $Quartier
     */
    public function setQuartier($Quartier)
    {
        $this->_Quartier = $Quartier;
    }

    /**
     * @param mixed $Rue
     */
    public function setRue($Rue)
    {
        $this->_Rue = $Rue;
    }

    /**
     * @param mixed $Ville
     */
    public function setVille($Ville)
    {
        $this->_Ville = $Ville;
    }
    public function loadFromObjet($obj)
    {
        $this->_IdAdresses= $obj->idAdresse;
        $this->_Rue = $obj->rue;
        $this->_Quartier= $obj->quartier;
        $this->_Commune = $obj->commune;
        $this->_Ville = $obj->ville;
        $this->_CodePostal = $obj->codePostal;
        $this->_Pays = $obj->PAYS;

    }
}