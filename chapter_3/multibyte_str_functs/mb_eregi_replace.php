<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:44
 *
 * string mb_eregi_replace ( string $pattern , string $replace , string $string [, string $option = "msri" ] )
 *
 * Replace regular expression with multi byte support ignoring case.
 * http://php.net/manual/en/function.mb-eregi-replace.php
 * Scans string for matches to pattern, then replaces the matched text with replacement.
 * @param string $pattern the regular expression pattern. Multi byte characters may be used. The case will be ignored.
 * @param string $replace the replacement text.
 * @param string $string the searched string.
 * @param string $option the search option ('msri' by default). See mb_regex_set_options() for explanation.
 * @return string|bool the resultant string or FALSE on error.
 */

$string = 'ЧЖКэзщЮд';
$replacement = [
    "й" => "i", "ц" => "c", "у" => "u", "к" => "k", "е" => "e", "н" => "n",
    "г" => "g", "ш" => "sh", "щ" => "sh", "з" => "z", "х" => "x", "ъ" => "\'",
    "ф" => "f", "ы" => "i", "в" => "v", "а" => "a", "п" => "p", "р" => "r",
    "о" => "o", "л" => "l", "д" => "d", "ж" => "zh", "э" => "ie", "ё" => "e",
    "я" => "ya", "ч" => "ch", "с" => "c", "м" => "m", "и" => "i", "т" => "t",
    "ь" => "\'", "б" => "b", "ю" => "yu",
    "Й" => "I", "Ц" => "C", "У" => "U", "К" => "K", "Е" => "E", "Н" => "N",
    "Г" => "G", "Ш" => "SH", "Щ" => "SH", "З" => "Z", "Х" => "X", "Ъ" => "\'",
    "Ф" => "F", "Ы" => "I", "В" => "V", "А" => "A", "П" => "P", "Р" => "R",
    "О" => "O", "Л" => "L", "Д" => "D", "Ж" => "ZH", "Э" => "IE", "Ё" => "E",
    "Я" => "YA", "Ч" => "CH", "С" => "C", "М" => "M", "И" => "I", "Т" => "T",
    "Ь" => "\'", "Б" => "B", "Ю" => "YU",
];

foreach ($replacement as $i => $u) {
    $string = mb_eregi_replace($i, $u, $string, 'msri');
}

var_dump($string);