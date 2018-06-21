<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of property
 *
 * @author arte1
 */
class Property {

    private $id;
    private $asset_id;
    private $cat_id;
    private $title;
    private $image;
    private $alias;
    private $description;
    private $full_description;
    
    function getId() {
        return $this->id;
    }

    function getAsset_id() {
        return $this->asset_id;
    }

    function getCat_id() {
        return $this->cat_id;
    }

    function getTitle() {
        return $this->title;
    }

    function getImage() {
        return $this->image;
    }

    function getAlias() {
        return $this->alias;
    }

    function getDescription() {
        return $this->description;
    }

    function getFull_description() {
        return $this->full_description;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setAsset_id($asset_id) {
        $this->asset_id = $asset_id;
    }

    function setCat_id($cat_id) {
        $this->cat_id = $cat_id;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function setAlias($alias) {
        $this->alias = $alias;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setFull_description($full_description) {
        $this->full_description = $full_description;
    }



}
