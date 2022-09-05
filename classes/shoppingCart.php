<?php

class ShoppingCart{

    protected $product;
    protected $user;

    function __construct($_product, $_user){

        $this->product = $_product;
        $this->user = $_user;
        
    }

    function getCartTotal($_product, $_user, $card){

        $price = $_product->getPrice();

        $cardBalance = $card->getBalance();

        $finalPrice = $cardBalance - $price;

        return $finalPrice;
    }

};