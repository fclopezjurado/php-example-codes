<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:40
 *
 * string mb_decode_mimeheader ( string $str )
 *
 * Decode string in MIME header field.
 * http://php.net/manual/en/function.mb-decode-mimeheader.php
 * Decodes encoded-word string str in MIME header.
 * @param string $str the string being decoded.
 * @return string the decoded string in internal character encoding.
 */

var_dump(mb_decode_mimeheader('=?UTF-8?Q?=C3=A9l=C3=A9phant?='));