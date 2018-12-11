<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:46
 *
 * Set/Get HTTP output character encoding.
 * http://php.net/manual/en/function.mb-http-output.php
 * Set/Get the HTTP output character encoding. Output after this function is called will be converted from the set
 * internal encoding to encoding.
 * @param string $encoding if encoding is set, mb_http_output() sets the HTTP output character encoding to encoding.
 * If encoding is omitted, mb_http_output() returns the current HTTP output character encoding.
 * @return mixed if encoding is omitted, mb_http_output() returns the current HTTP output character encoding.
 * Otherwise, Returns TRUE on success or FALSE on failure.
 */

var_dump(mb_http_output());
var_dump(mb_http_output('UTF-8'));