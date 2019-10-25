<?php


class SendMessageAction implements Action {
    public function execute(){


        if (!$this->valide())
            return "contact";
        
        


        die();
        return "";
    }

    public function Valide(){
        $_REQUEST["field_msg"]["message"] = "";
       $_REQUEST["field_msg"]["message"]="" ;

        $result = true;


        $phone = InputValidation::phoneValidation($_REQUEST['fphone']);
        $name = InputValidation::nameValidation($_REQUEST['fname']);

        if (!$phone){

            $_REQUEST["field_msg"]["phone"] = "Format téléphone invalide!";
            $result = false;

        }

        if (($_REQUEST['fmsg'])==""){

            $_REQUEST["field_msg"]["message"] = "Veuillez écrire un message";
            $result = false;
        }

        if (!$name){
            $_REQUEST["field_msg"]["name"] = "Veuillez écrire un message";
            $result = false;
        }


        $mail = (ISSET($_REQUEST['fmail'])) ? $_REQUEST['fmail'] : "";
        $message=$_REQUEST['fmsg'];








    }
}
