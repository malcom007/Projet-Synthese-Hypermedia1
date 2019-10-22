<?php

class LoginAction implements Action {

    public function execute()
    {
        //verification si y a deja une session
        if (!ISSET($_SESSION)){
            session_start();
        }

        //Verification si connecté si en tant qu'Admin
        if (ISSET($_SESSION['userName']) && ISSET($_SESSION['profil'])){

            if ($_SESSION['profil'] === 1){
                return 'dashboard';
            }

    }

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
