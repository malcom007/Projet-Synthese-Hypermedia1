<?php

// -- Inclusion de l'autoloader frontal --
require_once('./modele/config/Autoloader.php');
$action = NULL;
$vue = NULL;
	if (ISSET($_REQUEST["action"]))
	{
		//$vue = ActionBuilder::getAction($_REQUEST["action"])->execute();
		/*
		Ou :*/
		$actionDemandee = $_REQUEST["action"];
		$controleur = ActionBuilder::getAction($actionDemandee);
		$vue = $controleur->execute();
		/**/
	}
	else
	{
		//On crée une variable q
		$action = ActionBuilder::getAction("");
		$vue = $action->execute();
	}
	if ($action instanceof RequirePRGAction) {
		//La méthode execute() d'une RequirePRGAction doit retourner le nom de l'action
		//qu'on doit fournir dans le redirect.
		header("Location: ?action=".$vue);
	}
	else {
		include_once('vue/'.$vue.'.php');
	}

?>
