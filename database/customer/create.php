<?php

require_once '../../classes/autoload.php';

$name       = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$birthdate  = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf        = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
$rg         = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_SPECIAL_CHARS);
$phone      = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);

$newUser = new Customer();
$newUser->dataFromForm($name, $birthdate, $cpf, $rg, $phone);
$newUser->create();
