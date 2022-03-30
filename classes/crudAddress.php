<?php

interface crudAddress {

    public function create();
    public function read($search);
    public function update($full_address, $city, $customer_id);
    public function delete($id);
}
