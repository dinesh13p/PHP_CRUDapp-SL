<?php
class student{
    var $name;
    var $age;
    var $sem;

    function __construct($n, $a, $s){
        $this -> name = $n;
        $this -> age = $a;
        $this -> sem = $s;
    }
    function sendGreating(){
        echo "Welcome," . $this -> name;
    }
}
$rame = new student("Ramu", 20, "3rd");
$rame -> sendGreating();

$dinesh = new student("Dinesh",21,"4th");
$dinesh -> sendGreating();

?>