<?php
class vehicle{
    var $type;
    var $color;
    private $price;

    function __construct($t, $c, $p){
        $this -> type = $t;
        $this -> color = $c;
        $this -> price = $p;
    }

    function show(){
        echo "Vehicle Type: " . $this -> type . "<br>";
        echo "Color: " . $this -> color . "<br>";
        echo "Price: " . $this -> price . "<br>";
    }

    function __destruct(){
        echo "<br>";
    }
}

class car extends vehicle{
    var $mielage;
    var $topspeed;
    var $fueltype;
    var $tankcapacity;
    }

$v1 = new vehicle("Car", "Navy", "65 lakhs");
$v1 -> show();

// $v2 = new vehicle("Truck", "2019", "White", "80 lakhs");
// $v2->show();
?>