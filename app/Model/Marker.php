<?php

require_once 'Imovel.php';
class Marker {    
    
    private $id;
    private $name;
    private $address;
    private $lat;
    private $lng;
    private $type;
    private $imovel;
    
    public function __construct() {
        $this->imovel = new Imovel();
    }
   
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getAddress() {
        return $this->address;
    }

    function getLat() {
        return $this->lat;
    }

    function getLng() {
        return $this->lng;
    }

    function getType() {
        return $this->type;
    }

    function getImovel() {
        return $this->imovel;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setAddress($address) {
        $this->address = $address;
    }

    function setLat($lat) {
        $this->lat = $lat;
    }

    function setLng($lng) {
        $this->lng = $lng;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setImovel($imovel) {
        $this->imovel = $imovel;
    }


}
