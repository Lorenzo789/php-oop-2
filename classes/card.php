<?php

/**
 * class card 
 */
class Card{
    protected $name;
    protected $surname;
    protected $numberCard;
    protected $balance;
    protected $cvv;
    protected $expiry;

    function __construct($_name, $_surname, $_numberCard, $_balance, $_cvv, $_expiry){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->numberCard = $_numberCard;
        $this->balance = $_balance;
        $this->cvv = $_cvv;
        $this->expiry = $_expiry;
    }
}