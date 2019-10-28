<?php

class ActionBuilder {
	public static function getAction($nomAction){
		switch ($nomAction)
		{
			//page Login
			case "connecter" :
				return new LoginAction();
				break;

			// Page se Logout
			case "deconnecter" :
				return new LogoutAction();
				break;

			// Page se Logout
			case "dashboardTerminal" :
				return new DashboardTerminalAction();
				break;

			//pase d'accueil
			case "terminalLogin":
				return new TerminalLoginAction();

			//Page Contact form
			case"contact":
				return new ContactAction();
				break;

			//Page Contact form
			case"sendMessage":
				return new SendMessageAction();
				break;

			//Page Contact form
			case"dashboard":
				return new DashboardTransporteurAction();
				break;

			//page Login
			case "AjouterTerminal" :
				return new AjouterTerminalAction();
				break;
			case"dashboardAdmin":
				return new DashboardAdminAction();
				break;

			//page Login
			case "AjouterTransporteur" :
				return new AjoutEntrepriseAction();
				break;

			default :
				return new DefaultAction();
		}
	}
}
?>
