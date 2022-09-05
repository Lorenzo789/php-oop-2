<?php

require_once __DIR__ . '/user.php';

/**
 * class registered user 
 */
class RegisteredUser extends User {
    protected $userName;
    protected $password;
    protected $address;

    function __construct($_name, $_surname, $_userName, $_password, $_address){
        
        parent::__construct($_name, $_surname,);
        $this->userName = $_userName;
        $this->password = $_password;
        $this->address = $_address;
    }
}