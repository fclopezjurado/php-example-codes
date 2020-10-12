<?php

$array1 = $array2 = array('img12.png', 'img10.png', 'img2.png', 'img1.png');

asort($array1);
echo 'Standard sorting' . PHP_EOL;
print_r($array1);

natsort($array2);
echo PHP_EOL . 'Natural order sorting' . PHP_EOL;
print_r($array2);