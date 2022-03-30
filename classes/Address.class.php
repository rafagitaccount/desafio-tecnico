<?php

class Address extends Connection implements crudAddress {

    private $id, $full_address, $city, $customer_id;

    protected function setId($id) {
        $this->id = $id;
    }

    protected function getId() {
        return $this->id;
    }

    protected function setFullAddress($full_address) {
        $this->full_address = $full_address;
    }

    protected function getFullAddress() {
        return $this->full_address;
    }

    protected function setCity($city) {
        $this->city = $city;
    }

    protected function getCity() {
        return $this->city;
    }

    protected function setCustomerId($customer_id) {
        return $this->customer_id;
    }

    // Especific methods
    public function dataFromForm($full_address, $city, $customer_id) {
        $this->setFullAddress($full_address);
        $this->setCity($city);
        $this->setCustomerId($customer_id);
    }

    // Interface methods
    public function create() {
    }
    public function read($search) {
    }
    public function update($full_address, $city, $customer_id) {
    }
    public function delete($id) {
    }
}
