# ribs-module-starter-dev
[![AGPL License](http://img.shields.io/badge/license-AGPL%20v3-red.svg?style=flat-square)](http://opensource.org/licenses/AGPL-3.0) 

This module contains all files and folder to begin the developpment of a module

## Base folders and files

- admin : contain all files wich be used in administrator part
- app : contain all fils wich be used in app view
- router : contain routes file for admin and app. It contains a config.php file to put constant in it if it is necessary.
- install.php contain only one variable, in it put you sql requesto to create all tables for your module
- uninstall.php contain only one variable, in it put you sql requesto to delete all tables for your module
- composer.json wich is created by composer on install

## Admin folders and files

- controller : put in it all controllers and class files wich will be user in administrator
- views : put in this folders all files for the view in administrator of your module
- views/header.html contain the header that ribs use
- views/index.html contain skeleton to begin a page in administration

## App folders and files

- controller : put in it all controllers and class files wich will be user in app
- views : put in this folders all files for the view in app of your module
- views/header.html can contain header of your module (could be deleted)
- views/index.html contain skeleton to begin a page in app

## Router folders and files

- routes.php and admin_routes.php : this files is called in index.php at the base of ribs in RouterModule class.
In the first if :

```php
if (\core\modules\GestionModule::getModuleActiver("your-module-name"))
```
you can call controller. this if check if you module is correctly activated in modul table.

To call a controller you have to use this code : 
```php
if ($this->page == "a-page") {
	\modules\blog\app\controller\MyModuleClass::$router_parameter = $this->parametre;
	$this->controller = "your_module_folder/app/controller/your_file.php";
}
```
- "a-page" -> this is the name of the page that you call in url
- the parameter is a paramter set in url (after last / in url)
- $this->controller is the path where the controller you want, the base path of it is /modules/ Put the folder of you module and path in you module folder

## Url construction

- http://your-webste.com/you-module-url/a-page-of-module : this url will go to find a file you have in app
of admin (depend or where you are in ribs) the file a-page-of-module.html in views folder module.
- http://your-webste.com/you-module-url/a-page-of-module/a-parameter : if the page a-parameter does not exist and if page a-page-of-module exist, it will
calls a-page-of-module and in routes.php or admin_routes.php you have to pass your parameter to the class.
- http://your-webste.com/you-module-url/a-page-of-module/an-other-page will go to find in folder view the files a-page-of-module/an-other-page