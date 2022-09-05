<?php

/**
 * class card 
 */
class Card{
    protected $name;
    protected $numberCard;
    protected $balance;
    protected $cvv;
    protected $expiry;

    function __construct($_name, $_numberCard, $_balance, $_cvv, $_expiry){
        $this->name = $_name;
        $this->numberCard = $_numberCard;
        $this->balance = $_balance;
        $this->cvv = $_cvv;
        $this->expiry = $_expiry;
    }

    //controllo numbercard = 16 numeri
    //controllo cvv = 3 numeri
    //controllo expiry

    function getBalance(){
        return $this->balance;
    }
}