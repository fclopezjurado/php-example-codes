<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:40
 *
 * Detect character encoding.
 * http://php.net/manual/en/function.mb-detect-encoding.php
 * @param string $str the string being detected.
 * @param mixed $encoding_list is list of character encoding. Encoding order may be specified by array or comma
 * separated list string. If encoding_list is omitted, detect_order is used.
 * @param bool $strict specifies whether to use the strict encoding detection or not. Default is FALSE.
 * @return string the detected character encoding or FALSE if the encoding cannot be detected from the given string.
 */

var_dump(mb_detect_encoding('áéóú', 'UTF-8'));
var_dump(mb_detect_encoding('áéóú', 'UTF-8', true));
var_dump(mb_detect_encoding('accentu�e' , 'UTF-8, ISO-8859-1'));
var_dump(mb_detect_encoding('accentu�' , 'UTF-8, ISO-8859-1'));

$strings = array(
    "mais coisas a pensar sobre diário ou dois!",
    "plus de choses à penser à journalier ou à deux !",
    "¡más cosas a pensar en diario o dos!",
    "più cose da pensare circa giornaliere o due!",
    "flere ting å tenke på hver dag eller to!",
    "Další věcí, přemýšlet o každý den nebo dva!",
    "mehr über Spaß spät schönen",
    "më vonë gjatë fun bukur",
    "több mint szórakozás késő csodálatos kenyér"
);

$convert = array();
setlocale(LC_CTYPE, 'de_DE.UTF-8');
foreach ($strings as $string)
    $convert[] = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $string);

var_dump($convert);

$convert = array();
setlocale(LC_CTYPE, 'nl_NL.UTF-8');
foreach($strings as $string)
    $convert[] = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $string);

var_dump($convert);

$waysToSayHello = [
    'emoji' => "\u{1F44B}",
    'latin_chars' => "Hello",
    'accentedChars' => "ça va?"
];
foreach ($waysToSayHello as $method => $string) {
    var_dump("$method : encoding [" . mb_detect_encoding($string, 'ISO-8859-1') . '] encoding ['
        . mb_detect_encoding($string, ['ASCII','UTF-8']) . '] strlen [' . strlen($string) . '] mb_strlen ['
        . mb_strlen($string) . '] first character[' . $string[0] . ']');
}