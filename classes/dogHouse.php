<?php

require_once __DIR__ . '/product.php';

/**
 * class dogHouse 
 */
class DogHouse extends Product {

    protected $material;
    protected $dimensions;

    /**
     * construct DogHouse 
     */
    function __construct($_name, $_price, $_rewiews, $_material, $_dimensions){
        
        parent::__construct($_name, $_price, $_rewiews);
        $this->material = $_material;
        $this->dimensions = $_dimensions;

    }

    function getMaterial(){
        return $this->material;
    }

    function setMaterial($_material){
        $this->material = $_material;
    }

    function getDimensions(){
        return $this->dimensions;
    }

    function setDimensions($_dimensions){
        $this->dimensions = $_dimensions;
    }

};