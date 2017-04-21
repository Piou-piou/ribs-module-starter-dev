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