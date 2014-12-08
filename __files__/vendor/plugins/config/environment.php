<?php

//Load the correct environment off the bat.
include __DIR__ . '/environments/' . Registry::get('pr-environment') . '.php';

//Load any routes that the plugin needs
include __DIR__ . '/routes.php';