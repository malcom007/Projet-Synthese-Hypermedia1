<?php

// -- Inclusion de l'autoloader frontal --
require_once('./modele/config/Autoloader.php');



try{

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

}
catch (Exception $ex){
	echo " <script> console.log('Eeure Mlaocom'".$ex.")   </script>  ";
}


// On affiche la page (vue)
include_once('vue/'.$vue.'.php');
?>
