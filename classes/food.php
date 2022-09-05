<?php

require_once __DIR__ . '/product.php';

/**
 * class food 
 */
class Food extends Product{

    protected $ingredients = [];
    protected $weight;
    protected $animalOfDestination;

    /**
     * construct food 
     */
    function __construct($_name, $_price, $_rewiews, $_weight, $_animalOfDestination, ...$_ingredients){
        
        parent::__construct($_name, $_price, $_rewiews);
        $this->ingredients = $_ingredients;
        $this->weight = $_weight;
        $this->animalOfDestination = $_animalOfDestination;

    }

    //function to add the ingredients of the food
    function addIngredients($_ingredients){
        $this->ingredients = array_merge($this->ingredients, $_ingredients);
    }

    function getWeight(){
        return $this->weight;
    }

    function setWeight($_weight){
        $this->weight = $_weight;
    }

    function getAnimalOfDestination(){
        return $this->animalOfDestination;
    }

    function setAnimalOfDestination($_animalOfDestination){
        $this->animalOfDestination = $_animalOfDestination;
    }
};