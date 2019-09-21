<?php


class ContactsEntrs extends  Personnes
{
    protected $_NumeroPoste;

    public function createcontact($prenom,$nom,$numCell,$email,$password,$typeCompte,$numroposte)
    { $today= MyGenerator::getDateNow();

        $this->setId(MyGenerator::getIdGenerated());
        $this->setPrenom($prenom);
        $this->setNom($nom);
        $this->setNumCell($numCell);
        $this->setMail($email);
        $this->setPassword($password);
        $this->setTypeCompte($typeCompte);
        $this->setDateActivation($today);
        $this->setDateModification($today);
        $this->_NumeroPoste = $numroposte;
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