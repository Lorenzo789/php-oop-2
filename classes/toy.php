<?php

require_once __DIR__ . '/product.php';

/**
 * class toy 
 */
class Toy extends Product{

    protected $materials;
    protected $color;
    protected $animalOfDestination;

    /**
     * construct toy 
     */
    function __construct($_name, $_price, $_rewiews, $_materials, $_color, $_animalOfDestination){
        
        parent::__construct($_name, $_price, $_rewiews);
        $this->materials = $_materials;
        $this->color = $_color;
        $this->animalOfDestination = $_animalOfDestination;

    }

    function getMaterial(){
        return $this->material;
    }

    function setMaterial($_material){
        $this->material = $_material;
    }

    function getColor(){
        return $this->color;
    }

    function setColor($_color){
        $this->color = $_color;
    }


    function getAnimalOfDestination(){
        return $this->animalOfDestination;
    }

    function setAnimalOfDestination($_animalOfDestination){
        $this->animalOfDestination = $_animalOfDestination;
    }
}