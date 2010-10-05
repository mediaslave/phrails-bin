<?php
define('PR_APPLICATION_NAMESPACE', '');

//load the correct file specified by the environment.
if(!isset($_SERVER['PHRAILS_ENV'])){
	include 'environments/development.php';
	Registry::set('pr-environment', 'development');
}else{
	include 'environments/' . $_SERVER['PHRAILS_ENV'] . '.php';
	Registry::set('pr-environment', $_SERVER['PHRAILS_ENV']);
}

/**
 * Set the install path if it is not set in the server config.
 * 
 * set_install_path('/path/to/app/');
 * 
 * Don't forget the ending slash
 */
set_install_path();

//Set up the include paths for the app.
add_include_directory('./app/controllers', true);
add_include_directory('./app/models', true);
add_include_directory('./app/views');
add_include_directory('./lib');
add_include_directory('./config');

/**
 * If you would like to store plugins in a different directory than vendor
 * you can uncomment the line below and add the path to your plugins folder.
 * This allows you to share plugins over multiple projects and keep a 
 * cleaner source tree for this project
 */
//add_include_directory('/path/to/shared/plugins/directory');
/**
 * If you want to share models across projects you can specify another model
 * folder to include.
 */
//add_include_directory('/path/to/shared/model/directory');

//Load all of the applications helpers.
$app_folder = realpath('./app');
include_all_in_folder($app_folder . '/helpers');

//Set where the routes file is.
Registry::set('pr-routes-path', dirname(__FILE__) . '/routes.php');