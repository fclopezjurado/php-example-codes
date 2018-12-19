<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:12
 *
 * string convert_cyr_string ( string $str , string $from , string $to )
 *
 * Converts from one Cyrillic character set to another.
 * http://php.net/manual/en/function.convert-cyr-string.php
 * @param string $str the string to be converted.
 * @param string $from the source Cyrillic character set, as a single character.
 * @param string $to the target Cyrillic character set, as a single character. Supported characters are:
 * k - koi8-r
 * w - windows-1251
 * i - iso8859-5
 * a - x-cp866
 * d - x-cp866
 * m - x-mac-cyrillic
 * @return string the converted string.
 */

/**
 * @param $array
 * @param $from
 * @param $to
 * @return mixed
 */
function convert_cyr_array($array, $from, $to)
{
    $result = [];

    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result[$key] = convert_cyr_array($value, $from, $to);
            continue;
        }

        $result[$key] = convert_cyr_string($value, $from, $to);
    }

    return $result;
}

$array[0] = 'сВМПЛП';
$array[1] = 'зТХЫБ';
$array[2] = array('пЗХТЕГ','рПНЙДПТ');
$array[3] = array(
    array('бРЕМШУЙО','нБОДБТЙО'),
    array('бВТЙЛПУ','рЕТУЙЛ')
);
/**
 * from k (koi8-r) to w (windows-1251)
 */
var_dump(convert_cyr_array($array,'k','w'));