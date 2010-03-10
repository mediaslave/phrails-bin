<?php

//Set up the include paths for the app.
add_include_directory('./app/controllers');
add_include_directory('./app/models');
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

//load the correct file specified by the environment.
if(!isset($_SERVER['PHP_RAILS_ENV'])){
	Registry::set('pr-environment', 'development');
	include 'environments/development.php';
}else{
	Registry::set('pr-environment', $_SERVER['PHP_RAILS_ENV']);
	include 'environments/' . $_SERVER['PHP_RAILS_ENV'] . '.php';
}