<?php

require_once ('./controleur/Action.interface.php');

class DashboardTransporteurAction implements  Action
{
    //overiding de la function execute
    public  function execute()
    {
        return "transporteur/dashboard";
    }
}


