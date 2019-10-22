<?php

class ActionBuilder{
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

			//Page Contact form
			case"contact":
				return new ContactAction();
				break;

			//Page Contact form
			case"sendMessage":
				return new DefaultAction();
				break;

			default :
				return new DefaultAction();
		}
	}
}
?>
