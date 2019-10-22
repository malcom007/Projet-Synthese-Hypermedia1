<?php
require_once('./controleur/Action.interface.php');

class SendMessageAction implements Action {
    public function execute(){
        echo "holla";
        return "";
    }
}
