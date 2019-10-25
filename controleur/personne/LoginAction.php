<?php

class LoginAction implements Action {

    public  function execute()
    {
        return "login";
    }

    public function valide()
    {
        $result = true;
        if ($_REQUEST['courriel'] == "")
        {
            $_REQUEST["messages"]["courriel"] = "Donnez votre courriel";
            $result = false;
        }
        if ($_REQUEST['motDePasse'] == "")
        {
            $_REQUEST["messages"]["motDePasse"] = "Mot de passe obligatoire";
            $result = false;
        }
        return $result;
    }

}
