<?php

require_once ('./controleur/Action.interface.php');

class ContactAction implements  Action
{
    //overiding de la function execute
    public  function execute()
    {
        return "contact";
    }
}


