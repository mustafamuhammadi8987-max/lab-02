<?php
// Task 3 - Create an Abstract Class and Abstract Method

abstract class Vehicle
{
    abstract public function start();
}

class Car extends Vehicle
{
    public function start()
    {
        echo "Car engine started.<br>";
    }
}

class Bike extends Vehicle
{
    public function start()
    {
        echo "Bike started.<br>";
    }
}

$car = new Car();
$bike = new Bike();

$car->start();
$bike->start();
?>
