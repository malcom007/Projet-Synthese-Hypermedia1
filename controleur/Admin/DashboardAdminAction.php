<?php
require_once ('./controleur/Action.interface.php');

class DashboardAdminAction implements  Action
{
    public  function execute()
    {
        return "admin/DashAdmin";
    }
}