<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:22
 *
 * string quoted_printable_encode ( string $str )
 *
 * Convert a 8 bit string to a quoted-printable string.
 * http://php.net/manual/en/function.quoted-printable-encode.php
 * Returns a quoted printable string created according to » RFC2045.
 * @param string $str the input string.
 * @return string the encoded string.
 */

var_dump(quoted_printable_encode("Hello\vworld."));
var_dump(quoted_printable_encode("www.example.com\twww.example.com"));