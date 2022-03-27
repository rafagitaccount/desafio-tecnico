<?php
//session_start();

require_once 'crudCustomer.php';

class Customer extends Connection implements crudCustomer {

    private $id, $name, $birthdate, $cpf, $rg, $phone;

    protected function setId($id) {
        $this->id = $id;
    }

    protected function getId() {
        return $this->id;
    }

    protected function setName($name) {
        $this->name = $name;
    }

    protected function getName() {
        return $this->name;
    }

    protected function setBirthdate($birthdate) {
        $this->birthdate = $birthdate;
    }

    protected function getBirthdate() {
        return $this->birthdate;
    }

    protected function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    protected function getCpf() {
        return $this->cpf;
    }

    protected function setRg($rg) {
        $this->rg = $rg;
    }

    protected function getRg() {
        return $this->rg;
    }

    protected function setPhone($phone) {
        $this->phone = $phone;
    }

    protected function getPhone() {
        return $this->phone;
    }

    // Especific methods
    public function dataFromForm($name, $birthdate, $cpf, $rg, $phone) {
        $this->setName($name);
        $this->setBirthdate($birthdate);
        $this->setCpf($cpf);
        $this->setRg($rg);
        $this->setPhone($phone);
    }

    public function dataFromTable($id) {
        $this->setId($id);
        $_id = $this->getId();

        $sql = "SELECT * FROM customer WHERE id = :id";

        $stmt = Connection::prepare($sql);
        $stmt->bindParam(':id', $_id);
        $stmt->execute();

        $result = $stmt->fetchAll();

        foreach ($result as $values) :
            require_once '../forms/form-edit-customer.php';
        endforeach;
    }

    // Interface methods
    public function create() {
        $name = $this->getName();
        $birthdate = $this->getBirthdate();
        $cpf = $this->getCpf();
        $rg = $this->getRg();
        $phone = $this->getPhone();

        $sql = "INSERT INTO customer (name,birthdate,cpf,rg,phone) values(:name, :birthdate, :cpf, :rg, :phone)";

        $stmt = Connection::prepare($sql);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':birthdate', $birthdate);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':rg', $rg);
        $stmt->bindParam(':phone', $phone);

        if ($stmt->execute()) :
            $_SESSION['sucesso'] = "Cadastrado com sucesso!";
            $destino = header("Location:/../public/customer.php");
        else :
            $_SESSION['erro'] = "Cliente já cadastrado!";
            $destino = header("Location:/../public/customer.php");
        endif;
    }

    public function read() {
        $sql = "SELECT * FROM customer";

        $stmt = Connection::prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();

        foreach ($result as $values) :
            $this->setId($values['id']);
            $this->setName($values['name']);
            $this->setBirthdate($values['birthdate']);
            $this->setCpf($values['cpf']);
            $this->setRg($values['rg']);
            $this->setPhone($values['phone']);

            $_id        = $this->getId();
            $_name      = $this->getName();
            $_birthdate = $this->getBirthdate();
            $_cpf       = $this->getCpf();
            $_rg        = $this->getRg();
            $_phone     = $this->getPhone();

            echo "<tr>";

            echo "<td>$_id</td>";
            echo "<td>$_name</td>";
            echo "<td>$_birthdate</td>";
            echo "<td>$_cpf</td>";
            echo "<td>$_rg</td>";
            echo "<td>$_phone</td>";
            echo "<td><a href='edit-customer.php?id=$_id'><i class='material-icons left'>edit</i>Editar</a></td>";
            echo "<td><a href='del-customer.php?id=$_id'><i class='material-icons left'>delete</i>Apagar</a></td>";
            echo "<td><a href='new-customer.php?id=$_id'><i class='material-icons left'>person_add</i>Novo</a></td>";

            echo "</tr>";

        endforeach;
    }

    public function update($id, $name, $birthdate, $cpf, $rg, $phone) {
        $this->setId($id);
        $this->setName($name);
        $this->setBirthdate($birthdate);
        $this->setCpf($cpf);
        $this->setRg($rg);
        $this->setPhone($phone);

        $id        = $this->getId();
        $name      = $this->getName();
        $birthdate = $this->getBirthdate();
        $cpf       = $this->getCpf();
        $rg        = $this->getRg();
        $phone     = $this->getPhone();

        $sql = "update customer set name = :name, birthdate = :birthdate, cpf = :cpf, rg = :rg, phone = :phone where id = :id";

        $stmt = Connection::prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':birthdate', $birthdate);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':rg', $rg);
        $stmt->bindParam(':phone', $phone);

        $stmt->execute();
        $destino = header("Location:../../public/customer.php");
    }

    public function delete($id) {
    }
}
