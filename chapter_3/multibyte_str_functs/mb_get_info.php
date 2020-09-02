<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:46
 *
 * mixed mb_get_info ([ string $type = "all" ] )
 *
 * Get internal settings of mbstring.
 * http://php.net/manual/en/function.mb-get-info.php
 * @param string type if type isn't specified or is specified to "all", an array having the elements
 * "internal_encoding", "http_output", "http_input", "func_overload", "mail_charset", "mail_header_encoding",
 * "mail_body_encoding" will be returned. If type is specified as "http_output", "http_input", "internal_encoding",
 * "func_overload", the specified setting parameter will be returned.
 * @return mixed an array of type information if type is not specified, otherwise a specific type.
 */

var_dump(mb_get_info());
var_dump(mb_get_info('internal_encoding'));
var_dump(mb_get_info('func_overload'));