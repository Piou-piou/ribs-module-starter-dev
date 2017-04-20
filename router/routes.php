<?php
	$pages_module = [
		"index",
	];
	
	if (\core\modules\GestionModule::getModuleActiver("your-module-name")) {
		if (!in_array($this->page, $pages_module)) {
			header("location:".WEBROOT."404");
		}
		
		//use controller
		/*if ($this->page == "a-page") {
			\modules\blog\app\controller\MyModuleClass::$router_parameter = $this->parametre;
			$this->controller = "your_module_folder/app/controller/your_file.php";
		}*/
	}
	else {
		header("location:".WEBROOT."404");
	}