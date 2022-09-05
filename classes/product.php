<?php

/**
 * class product 
 */
class Product {

    protected $name;
    protected $price;
    protected $rewiews;

    /**
     * construct class product
     */
    function __construct($_name, $_price, $_rewiews){

        $this->name = $_name;
        $this->price = $_price;
        $this->rewiews = $_rewiews;
        
    }

    function getName(){
        return $this->name;
    }

    function setName($_name){
        $this->name = $_name;
    }

    function getPrice(){
        return $this->price;
    }

    function setPrice($_price){
        $this->price = $_price;
    }

    function getRewiews(){
        return $this->rewiews;
    }

    function setRewiews($_rewiews){
        $this->rewiews = $_rewiews;
    }
};