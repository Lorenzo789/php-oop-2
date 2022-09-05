<?php

/**
 * class user 
 */
class User{

    protected $cardData;
    protected $name;

    /**
     * construct class user
     */
    function __construct($_cardData, $_name){

        $this->cardData = $_cardData;
        $this->name = $_name;
    }


};