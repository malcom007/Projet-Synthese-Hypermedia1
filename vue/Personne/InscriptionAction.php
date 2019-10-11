<?php

//require_once '.\controleur\Action.interface.php';
class InscriptionAction implements Action
{
    public function execute()
    {
        if(!ISSET($_SESSION)){
            session_start();
        }
        if(ISSET ($_SESSION["connected"])){
            return "AccueilUsager";
        }

        return "InscriptionUsager";
    }

    public function validate(){
        $result=true;
        if($_REQUEST['prenoms']==""){
            $_REQUEST['messages']['prenoms'] = "Veuillez renseigner le champ prenom";
            $result=false;
        }
        if($_REQUEST['nom']==""){
            $_REQUEST['messages']['nom'] = "Veuillez renseigner le champ nom";
            $result=false;
        }
        if($_REQUEST['numCel']==""){
            $_REQUEST['messages']['numCel'] = "Veuillez renseigner le champ numCel";
            $result=false;
        }
        if(preg_match("([0-9]{3}-[0-9]{3}-[0-9]{4})", $_REQUEST['numCel']) ==""){
            $_REQUEST['messages']['numCel'] = "Veuillez renseigner le champ numCel sous le format 514-902-0000";
            $result=false;
        }

        if($_REQUEST['email']==""){
            $_REQUEST['messages']['email'] = "Veuillez renseigner le champ email";
            $result=false;
        }
        if($_REQUEST['pwd']==""){
            $_REQUEST['messages']['pwd'] = "Veuillez renseigner le champ mot de passe";
            $result=false;
        }
        if(Strlen($_REQUEST['pwd'])<4){
            $_REQUEST['messages']['pwd'] = "Veuillez le mot de passe doit avoir au moins 4 caracteres";
            $result=false;
        }
        if($_REQUEST['psw-repeat']==""){
            $_REQUEST['messages']['psw-repeat'] = "Veuillez renseigner le champ Repeter mot de passe";
            $result=false;
        }
        return $result;
    }
}