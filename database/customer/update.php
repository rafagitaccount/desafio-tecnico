<?php

$id         = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$name       = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$birthdate  = filter_input(INPUT_POST, 'birthdate', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf        = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
$rg         = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_SPECIAL_CHARS);
$phone      = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);

require_once '../../classes/autoload.php';

$update = new Customer();
$update->update($id, $name, $birthdate, $cpf, $rg, $phone);
