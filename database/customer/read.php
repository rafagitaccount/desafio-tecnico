<?php

require_once '../classes/autoload.php';

$getAllUsers = new Customer();
$getAllUsers->read();
