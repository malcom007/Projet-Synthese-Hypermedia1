<?php
require_once './modele/classes/Personnes.php';

class ContactsEntrs extends  Personnes
{
    protected $_NumeroPoste;

    public function loadFromObjet($obj)
    {
        $this->setNom($obj->nom);
        $this->setPrenom($obj->prenom);
        $this->setMail($obj->mail);
        $this->setDateActivation($obj->dateActivation);
        $this->setDateModification($obj->dateModification);
        $this->setActived($obj->actived);
        $this->setNumCell($obj->numCell);
        $this->setId($obj->idPersonne);
        $this->_NumeroPoste = $obj->numPoste;


    }


    /**
     * @return mixed
     */
    public function getNumeroPoste()
    {
        return $this->_NumeroPoste;
    }

    /**
     * @param mixed $NumeroPoste
     */
    public function setNumeroPoste($NumeroPoste)
    {
        $this->_NumeroPoste = $NumeroPoste;
    }




}