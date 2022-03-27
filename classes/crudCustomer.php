<?php

interface crudCustomer {

    public function create();
    public function read();
    public function update($id, $name, $birthdate, $cpf, $rg, $phone);
    public function delete($id);
}
