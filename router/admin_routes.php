<?php
	$pages_module = [
		"index",
	];
	
	if (\core\modules\GestionModule::getModuleActiver("your-module-name")) {
		if (!in_array($this->page, $pages_module)) {
			\core\HTML\flashmessage\FlashMessage::setFlash("Cette page n'existe pas ou plus");
			header("location:".ADMWEBROOT);
		}
		
		//use controller
		/*if ($this->page == "a-page") {
			\modules\blog\app\controller\MyModuleClass::$router_parameter = $this->parametre;
			$this->controller = "your_module_folder/admin/controller/your_file.php";
		}*/
	}
	else {
		\core\HTML\flashmessage\FlashMessage::setFlash("L'accès à ce module n'est pas configurer ou ne fais pas partie de votre offre, contactez votre administrateur pour résoudre ce problème", "info");
		header("location:".ADMWEBROOT);
	}