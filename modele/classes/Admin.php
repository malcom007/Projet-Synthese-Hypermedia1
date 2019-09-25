<?php
require_once 'Personnes.php';
class Admin extends Personnes {

    public function __construct()
    {
    }

    public function createNewAdmin($prenom,$nom,$numCell,$email,$password){
        parent::createNewPersonWeb($prenom,$nom,$numCell,$email,$password,1);
    }










}
