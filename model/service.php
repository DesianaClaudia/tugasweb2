<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of service
 *
 * @author faqih
 */
class service {
    //put your code here
    private $id_service;
    private $name;
    private $address;
    private $phone;
    private $type;
    public function getId_service() {
        return $this->id_service;
    }

    public function getName() {
        return $this->name;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getType() {
        return $this->type;
    }

    public function setId_service($id_service) {
        $this->id_service = $id_service;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setType($type) {
        $this->type = $type;
    }


}
