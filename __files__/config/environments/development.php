<?php
/*
 * Changes this to where you have the framework installed.
 * This allows you to share one fromework for multiple projects.
 * Move the framework folder where ever you want, just change this var.
 */
$framework_install_path = 'framework';

//include the framework paths
include $framework_install_path . '/paths.php';

//Set the framework path, after we include the paths file.
Registry::set('pr-framwork-install-path', $framework_install_path);

//Set the domain that this app is running on.
Registry::set('pr-domain-uri', '');

//Set the session save handler here.
//Not implemented yet.
//Registry::set('pr-session-handler', 'database');

//Do you want to cache the template in this environment?
Registry::set('pr-cache-template', null);