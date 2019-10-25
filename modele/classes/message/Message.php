<?php

class Message {

    private $_IdMessage, $_TitreMessage, $_Message, $_RoleDestinateur, $_IdExpediteur, $_DateEnvoie, $_MsgLu, $_MsgTraite;

    public function __construct()
    {

    }

    public function prepareMsgFromContactForm($nom,$message,$phone){

        $this->_Message = 'Message: '.$message.'  Nom du contact:  '.$nom.'  Telephone du contact: '.$phone;
        $this->_RoleDestinateur = 1;


    }
}
