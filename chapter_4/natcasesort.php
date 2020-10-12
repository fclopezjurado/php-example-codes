<?php

$array1 = $array2 = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');

sort($array1);
var_dump('Standard sorting' . PHP_EOL);
print_r($array1);

natcasesort($array2);
var_dump(PHP_EOL . 'Natural order sorting (case-insensitive)');
print_r($array2);