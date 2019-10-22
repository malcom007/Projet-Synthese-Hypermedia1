<?php


class SendMessageAction implements Action {
    public function execute(){
        TerminalEntrepriseDAO::findById();
        $this->Valide();
        var_dump($this->Valide());
        die();
        return "";
    }

    public function Valide(){
        $_REQUEST["field_msg"]["message"] = "";
        $phone = InputValidation::phoneValidation($_REQUEST['fphone']);
        $name = InputValidation::nameValidation($_REQUEST['fname']);

        if (($_REQUEST['fmsg'])==""){
            echo $_REQUEST['fmsg'];
            $_REQUEST["field_msg"]["message"] = "Veuillez écrire un message";
        }
        $message=$_REQUEST['fmsg'];

        var_dump($_REQUEST["field_msg"]["message"]) ;

        var_dump($message);



        $result = true;

        if (!$phone){
            $_REQUEST['messages']['fphone'] = "Veuillez fournir un numéro valide";
            return false;
        }

    }
}
