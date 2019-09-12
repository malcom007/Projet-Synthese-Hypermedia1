<?php




class Personnes
{
    private $_Id, $_Prenom,$_Nom,$_NumCell,$_DateActivation,$_Actived,$_DateModification;


    public function __construct()
    {
    }

    /**
     * @param mixed $Id
     */
    public function setId($Id)
    {
        $this->_Id = $Id;
    }

    /**
     * @param mixed $Prenom
     */
    public function setPrenom($Prenom)
    {
        $this->_Prenom = $Prenom;
    }

    /**
     * @param mixed $Nom
     */
    public function setNom($Nom)
    {
        $this->_Nom = $Nom;
    }

    /**
     * @param mixed $NumCell
     */
    public function setNumCell($NumCell)
    {
        $this->_NumCell = $NumCell;
    }

    /**
     * @param mixed $DateActivation
     */
    public function setDateActivation($DateActivation)
    {
        $this->_DateActivation = $DateActivation;
    }

    /**
     * @param mixed $Actived
     */
    public function setActived($Actived)
    {
        $this->_Actived = $Actived;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_Id;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->_Prenom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_Nom;
    }

    /**
     * @return mixed
     */
    public function getNumCell()
    {
        return $this->_NumCell;
    }

    /**
     * @return mixed
     */
    public function getDateActivation()
    {
        return $this->_DateActivation;
    }

    /**
     * @return mixed
     */
    public function getActived()
    {
        return $this->_Actived;
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
     * Methode permettant de créer une personne a partir d'un tableau provenant de la base de donnée
     * @param mixed $tableau
     */
    public function loadFromArray($tableau)
    {
        $this->_Prenom = $tableau["prenom"];
        $this->_Nom = $tableau['nom'];
        $this->_Actived = $tableau ['actived'];
        $this->_NumCell = $tableau['cellulaire'];
        $this->_DateActivation['dateActivation'];
        $this->_DateModification = $tableau['dateModificaton'];
    }






}