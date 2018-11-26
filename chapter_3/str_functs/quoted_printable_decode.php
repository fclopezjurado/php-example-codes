<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:22
 * Convert a quoted-printable string to an 8 bit string.
 * http://php.net/manual/en/function.quoted-printable-decode.php
 * This function returns an 8-bit binary string corresponding to the decoded quoted printable string.
 * @param string $str the input string.
 * @return string the 8-bit binary string.
 */

var_dump(quoted_printable_decode("Hello=0Aworld."));
var_dump(quoted_printable_decode("www.example.com=09www.example.com"));