<?php
error_reporting(E_ALL);

//Boot up the app.
include 'config/boot.php';

//Process the request.
include $framework_install_path . '/run.php';

//Display the view.
print $Template->display();

