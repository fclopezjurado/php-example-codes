<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 23/10/18
 * Time: 16:54
 *
 * foreach loop.
 * https://secure.php.net/manual/en/control-structures.foreach.php
 * Language constructor.
 */

/* foreach example 1: value only */

$a = array(1, 2, 3, 17);

foreach ($a as $v) {
    echo "Current value of \$a: $v." . PHP_EOL;
}

/* foreach example 2: value (with its manual access notation printed for illustration) */

$a = array(1, 2, 3, 17);

$i = 0; /* for illustrative purposes only */

foreach ($a as $v) {
    echo "\$a[$i] => $v." . PHP_EOL;
    $i++;
}

/* foreach example 3: key and value */

$a = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17
);

foreach ($a as $k => $v) {
    echo "\$a[$k] => $v." . PHP_EOL;
}

/* foreach example 4: multi-dimensional arrays */
$a = array();
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";

foreach ($a as $v1) {
    foreach ($v1 as $v2) {
        echo "$v2" . PHP_EOL;
    }
}

/* foreach example 5: dynamic arrays */

foreach (array(1, 2, 3, 4, 5) as $v) {
    echo "$v" . PHP_EOL;
}