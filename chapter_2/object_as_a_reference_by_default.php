<?php

# Arrays are not passed by reference to functions.
$array = [1, 2, 3];

function addElement(array $array, int $number): void
{
    $array[] = $number;
}

addElement($array, 4);
var_dump($array);

# Objects are passed by reference to functions by default
class NewClass
{
    public $property;
}

function updateInstance(NewClass $instance): void
{
    $instance->property = 2;
}

$instance = new NewClass();
updateInstance($instance);
var_dump($instance);