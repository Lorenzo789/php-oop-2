<?php

/**
 * class user 
 */
class User{

    protected $name;
    protected $surname;

    /**
     * construct class user
     */
    function __construct($_name, $_surname,){
        $this->name = $_name;
        $this->surname = $_surname;
    }
};