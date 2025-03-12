<?php

namespace Lesson05\Inheritance;

class Vehicle
{
    public string $color = 'Black';

    public function accelerate()
    {
        echo 'Accelerating' . PHP_EOL;
    }
}

class Cart extends Vehicle
{
    public function accelerate()
    {
        echo 'Rolling' . PHP_EOL;
    }
}

$vehicle = new Vehicle();
$vehicle->accelerate();
echo "Vehicle color is {$vehicle->color}" . PHP_EOL;

$cart = new Cart();
$cart->accelerate();
$cart->color = 'Red';
echo "Cart color is {$cart->color}" . PHP_EOL;
