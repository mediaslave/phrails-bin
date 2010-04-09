<?php
//Load the environment
include 'config/environment.php';

//Load the inflections initializer;
include 'initializers/inflections.php';

//load the db settings
include Registry::get('pr-framwork-install-path') . '/db.php';