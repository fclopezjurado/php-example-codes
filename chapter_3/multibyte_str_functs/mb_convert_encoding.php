<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:39
 *
 * Convert character encoding.
 * http://php.net/manual/en/function.mb-convert-encoding.php
 * Converts the character encoding of string str to to_encoding from optionally from_encoding.
 * @param string $str the string being encoded.
 * @param string $to_encoding the type of encoding that $str is being converted to.
 * @param mixed $from_encoding is specified by character code names before conversion. It is either an array, or a
 * comma separated enumerated list. If from_encoding is not specified, the internal encoding will be used.
 * See supported encodings in notes.
 * @return string the encoded string.
 */

/* Convert internal character encoding to SJIS */
var_dump(mb_convert_encoding('Τη γλώσσα μου έδωσαν ελληνική', 'SJIS'));

/* Convert EUC-JP to UTF-7 */
var_dump(mb_convert_encoding('Τη γλώσσα μου έδωσαν ελληνική', 'UTF-7', 'EUC-JP'));

/* Auto detect encoding from JIS, eucjp-win, sjis-win, then convert str to UCS-2LE */
var_dump(mb_convert_encoding('Τη γλώσσα μου έδωσαν ελληνική', 'UCS-2LE',
    'JIS, eucjp-win, sjis-win'));

/* 'auto' is expanded to 'ASCII,JIS,UTF-8,EUC-JP,SJIS' */
var_dump(mb_convert_encoding('Τη γλώσσα μου έδωσαν ελληνική', 'EUC-JP', 'auto'));