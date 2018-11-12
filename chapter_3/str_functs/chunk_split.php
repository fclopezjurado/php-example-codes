<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:12
 * Can be used to split a string into smaller chunks.
 * http://php.net/manual/en/function.chunk-split.php
 * @param string body string to be chunked.
 * @param int chunklen the chunk length.
 * @param string end the line end sequence.
 * @return string the chunked string.
 */

$new_string = chunk_split(base64_encode('test'));

function chunk_split_unicode($str, $l = 76, $e = "\r\n")
{
    $tmp = array_chunk(preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY), $l);
    $str = '';

    foreach ($tmp as $t) {
        $str .= join("", $t) . $e;
    }

    return $str;
}

function word_chunk($str, $len = 76, $end = PHP_EOL)
{
    $pattern = '~.{1,' . $len . '}~u'; // like "~.{1,76}~u"
    $str = preg_replace($pattern, '$0' . $end, $str);
    return rtrim($str, $end);
}

$str1 = 'Yarım kilo çay, yarım kilo şeker';
$str2 = 'русский';
$string = '1234';

var_dump(chunk_split($str1, 4));
var_dump(chunk_split_unicode($str1, 4));
var_dump(chunk_split($str2, 3));
var_dump(word_chunk($str2, 3));
var_dump(substr(chunk_split($string, 2, ':'), 0, -1));