<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:40
 *
 * Set/Get character encoding detection order.
 * http://php.net/manual/en/function.mb-detect-order.php
 * Sets the automatic character encoding detection order to encoding_list.
 * @param mixed $encoding_list is an array or comma separated list of character encoding. See supported encodings in
 * notes. If encoding_list is omitted, it returns the current character encoding detection order as array.
 * This setting affects mb_detect_encoding() and mb_send_mail(). mbstring currently implements the following encoding
 * detection filters. If there is an invalid byte sequence for the following encodings, encoding detection will fail.
 * UTF-8, UTF-7, ASCII, EUC-JP,SJIS, eucJP-win, SJIS-win, JIS, ISO-2022-JP For ISO-8859-*, mbstring always detects as
 * ISO-8859-*. For UTF-16, UTF-32, UCS2 and UCS4, encoding detection will fail always.
 * @return array|bool When setting the encoding detection order, TRUE is returned on success or FALSE on failure.
 * When getting the encoding detection order, an ordered array of the encodings is returned.
 */

// Set detection order by enumerated list
var_dump(mb_detect_order('eucjp-win,sjis-win,UTF-8'));

// Set detection order by array
var_dump(mb_detect_order(['ASCII', 'JIS', 'EUC-JP']));

// Display current detection order
var_dump(mb_detect_order());