<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 25/10/18
 * Time: 9:38
 *
 * Casting test. Available castings:
 * (int), (integer) - cast to integer
 * (bool), (boolean) - cast to boolean
 * (float), (double), (real) - cast to float
 * (string) - cast to string
 * (array) - cast to array
 * (object) - cast to object
 * (unset) - cast to NULL
 * https://secure.php.net/manual/en/language.types.type-juggling.php
 */

$handler = curl_init();

/**
 * Casting to boolean.
 */
var_dump((bool)'');
var_dump((bool)1);
var_dump((bool)-2);
var_dump((bool)1.23);
var_dump((bool)0b100101);
var_dump((bool)'foo');
var_dump((bool)2.3e5);
var_dump((bool)array(12));
var_dump((bool)array());
var_dump((bool)"false");
var_dump(boolval(789));
var_dump((bool)$handler);
var_dump('--------------------');

/**
 * Casting to integer.
 * When converting from float to integer, the number will be rounded towards zero.
 * NaN and Infinity will always be zero when cast to integer.
 */
var_dump((int)'');
var_dump((int)false);
var_dump((int)true);
var_dump((int)1.23);
var_dump((int)1.78);
var_dump((int)0b100101);
var_dump((int)'foo');
var_dump((int)2.3e5);
var_dump((int)array(12, "3", 'test'));
var_dump((int)array());
var_dump((int)"false");
var_dump(intval($handler));
var_dump(intval(NAN));
var_dump(intval(INF));
/**
 * The reason behind this is that some numbers are rational in base 10 but are irrational in base 2. Although 0.7 can
 * be expressed as a rational number in base 10, when expressed in base 2 it is irrational. Because there are a
 * limited number of bits available to store the number, it is inevitable that some loss of precision will occur.
 */
var_dump((int)((0.1 + 0.7) * 10)); # Returns 7, because floating point precision.
var_dump('--------------------');

/**
 * Casting to float.
 * For information on converting strings to float, see String conversion to numbers. For values of other types, the
 * conversion is performed by converting the value to integer first and then to float.
 */

var_dump((float)'');
var_dump((float)false);
var_dump((float)true);
var_dump((float)23);
var_dump((float)78);
var_dump((float)0b100101);
var_dump((float)'foo');
var_dump((float)2.3e5);
var_dump((float)array(12, "3", 'test'));
var_dump((float)array());
var_dump((float)"false");
var_dump(floatval($handler));
var_dump(floatval(NAN));
var_dump(floatval(INF));
var_dump((float)((0.1 + 0.7) * 10)); # Returns 8, because floating point precision.
var_dump('--------------------');

/**
 * Casting to string.
 * A value can be converted to a string using the (string) cast or the strval() function.
 * A boolean TRUE value is converted to the string "1". Boolean FALSE is converted to "" (the empty string). This
 * allows conversion back and forth between boolean and string values.
 * An integer or float is converted to a string representing the number textually (including the exponent part for
 * floats). Floating point numbers can be converted using exponential notation (4.1E+6).
 * Arrays are always converted to the string "Array". Resources are always converted to strings with the structure
 * "Resource id #1". NULL is always converted to an empty string.
 */
$test = 78;
var_dump((string)null);
var_dump((string)'');
var_dump((string)false);
var_dump((string)true);
var_dump((string)23);
var_dump(settype($test, 'string'));
var_dump((string)0b100101);
var_dump((string)'foo');
var_dump((string)2.3e5);
var_dump((string)array(12, "3", 'test')); # PHP Notice
var_dump((string)array());
var_dump((string)"false");
var_dump(strval($handler));
var_dump(strval(NAN));
var_dump(strval(INF));
var_dump((string)((0.1 + 0.7) * 10)); # Returns 8, because floating point precision.
var_dump('--------------------');

/**
 * Casting to NULL, when a variable is unset.
 */
var_dump((unset)$test);
var_dump('--------------------');

/**
 * Casting to real. This casting is similar to "double" casting.
 */
$test = 78;
var_dump((real)null);
var_dump((real)'');
var_dump((real)false);
var_dump((real)true);
var_dump((real)23);
var_dump(settype($test, 'real')); # PHP warning. invalid data type.
var_dump((real)0b100101);
var_dump((real)'foo');
var_dump((real)2.3e5);
var_dump((real)array(12, "3", 'test')); # PHP Notice
var_dump((real)array());
var_dump((real)"false");
var_dump((real)($handler));
var_dump((real)NAN);
var_dump((real)INF);
var_dump((real)((0.1 + 0.7) * 10)); # Returns 8, because floating point precision.
var_dump('--------------------');

/**
 * Automatic type conversion examples.
 */
$foo = "1";
var_dump($foo);
$foo *= 2;
var_dump($foo);
$foo = $foo * 1.3;
var_dump($foo);
$foo = 5 * "10 Little Piggies";
var_dump($foo);
$foo = 5 * "10 Small Pigs";
var_dump($foo);

# The behaviour of an automatic conversion to array is currently undefined.
$a = 'car';
$a[0] = 'b';
var_dump($a);
var_dump('--------------------');

/**
 * String conversion to numbers.
 */
$examples = [
    (1 + "10.5"),
    (1 + "-1.3e3"),
    (1 + "bob-1.3e3"),
    (1 + "bob3"),
    (1 + "10 Small Pigs"),
    (4 + "10.2 Little Piggies"),
    ("10.0 pigs " + 1),
    ("10.0 pigs " + 1.0),
    "12 o clock",
    "Half past 12",
    "12.30",
    "7.2e2 minutes after midnight"
];
foreach ($examples as $example) {
    $result = 0 + $example;
    var_dump($result);
}
