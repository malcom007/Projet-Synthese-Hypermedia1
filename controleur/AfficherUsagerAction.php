<?php
require_once ('./controleur/Action.interface.php');

class AfficherUsagerAction implements Action
{
public function execute()
{
    if (!ISSET($_SESSION)) session_start();
    if (!ISSET($_SESSION["connecté"]))
        return "login";
    return "afficher";
    // TODO: Implement execute() method.
}

}