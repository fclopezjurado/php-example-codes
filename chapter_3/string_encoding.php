<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 4/09/20
 * Time: 18:18
 */

$waysToSayHello = [
    'emoji' => "\u{1F44B}",
    'latinchars' => "Hello",
    'accentedChars' => "ça va?"
];

foreach ($waysToSayHello as $method => $string) {
    echo "$method : encoding [" . mb_detect_encoding($string,'ISO-8859-1') . '] ' . PHP_EOL .
        'encoding [' . mb_detect_encoding($string, ['ASCII','UTF-8']) . '] ' . PHP_EOL .
        'strlen [' . strlen($string) . '] ' . PHP_EOL .
        'mb_strlen [' . mb_strlen($string) . '] ' . PHP_EOL .
        'first character[' . $string[0] . ']';
    echo PHP_EOL . "\r\n";
}