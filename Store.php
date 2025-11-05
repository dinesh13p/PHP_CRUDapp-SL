<?php
class Store{
    public $name;
    private $item;
    protected $price;

    function addToCart(){
        return "Item ".$this->item." with price ".$this->price." added 
        to cart succesfully!";
    }

    function setPrice($price){
        $this->price = $price;
    }
    function setItem($item){
        $this->item = $item;
    }

    function getItem(){
        return $this->item;
    }
}

$bbsm = new Store();
// $bbsm->name = 'BBSM';

/*
$bbsm->item = "Laptop"; // item is private, so this will cause an error
echo $bbsm->item;

$bbsm->price = 1000; // price has protected scope, so we can't access it directly
*/

$bbsm->setItem("Laptop");
echo $bbsm->setPrice(100000);

// echo $bbsm->name;
echo "<br />";
echo $bbsm->addToCart();

class OnlineStore extends Store{
    public $domain;

    function addToCart(){
        return "From Online Store: Item ".$this->getItem()." with price ".$this->price." added 
        to cart succesfully!";
    }
}

$amazon = new OnlineStore();
$amazon->domain = "www.amazon.com";
echo "<br />";

$amazon->name = "Amazon";
$amazon->setItem("Smartphone");
$amazon->setPrice(50000);
echo $amazon->addToCart();
?>