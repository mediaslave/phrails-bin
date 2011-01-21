<?php
//Load the environment
include 'config/environment.php';

//Load the inflections initializer;
include_all_in_folder(__DIR__ . '/initializers');

//load the db settings
include Registry::get('pr-framwork-install-path') . '/db.php';

include Registry::get('pr-framwork-install-path') . '/plugins.php';