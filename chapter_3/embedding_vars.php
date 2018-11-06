<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 6/11/18
 * Time: 11:05
 *
 * Variables, arrays and objects can be embedded in strings.
 */

$cat_food = 'Cheeseburgers';
var_dump('I can haz ' . $cat_food);
var_dump("I can haz $cat_food");

$dog_food = ['Pellets'];
$cat_food = new stdClass();
$cat_food->favorite = 'Cheeseburger';
var_dump("$dog_food[0]");
var_dump("$cat_food->favorite");

$burger = 'Cheeseburger';
var_dump("I can haz {$burger}");
var_dump("I can haz ${burger}");

/**
 * PHP notice.
 */
var_dump("I can haz $burgers");

/**
 * Variable is note defined and part associated to this variable in string is empty.
 */
var_dump("I can haz {$burger}s");

/**
 * You cannot use spaces between the braces and the variable that you want to evaluate.
 */
var_dump("I can haz { $burger }");

$cat_food = new stdClass();
$cat_food->name = 'Cheeseburgers';
$cat = new stdClass();
$cat->canhaz = [$cat_food];
var_dump("$cat->canhaz[0]->name");
var_dump($cat->canhaz[0]->name);