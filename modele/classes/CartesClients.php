<?php

require_once 'Cartes.php';

class CartesClients extends Cartes
{
    private $_nbreTitre, $_statut, $_dateExpiration, $_dateActivation;

    /**
     * CartesClients constructor.
     * @param $_nbreTitre
     */
    public function __construct()
    {
    }

    public function createCarteClient($libelle)
    {
        parent::createCarte($libelle);
        $this->activerCarte();
    }

    public function activerCarte()
    {
        $today = MyGenerator::getDateNow();
        $this->_statut = 1;
        $this->_dateActivation = $today;
        $this->_dateExpiration = MyGenerator::getDate2YearLater();
    }

    /**
     * @return mixed
     */

    public function getNbreTitre()
    {
        return $this->_nbreTitre;
    }

    /**
     * @param mixed $nbreTitre
     */
    public function setNbreTitre($nbreTitre)
    {
        $this->_nbreTitre = $nbreTitre;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->_statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut)
    {
        $this->_statut = $statut;
    }

    /**
     * @return mixed
     */
    public function getDateExpiration()
    {
        return $this->_dateExpiration;
    }

    /**
     * @param mixed $dateExpiration
     */
    public function setDateExpiration($dateExpiration)
    {
        $this->_dateExpiration = $dateExpiration;
    }

    /**
     * @return mixed
     */
    public function getDateActivation()
    {
        return $this->_dateActivation;
    }

    /**
     * @param mixed $dateActivation
     */
    public function setDateActivation($dateActivation)
    {
        $this->_dateActivation = $dateActivation;
    }

}