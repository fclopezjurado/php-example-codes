<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:48
 *
 * string mb_preferred_mime_name ( string $encoding )
 *
 * Get MIME charset string.
 * http://php.net/manual/en/function.mb-preferred-mime-name.php
 * Get a MIME charset string for a specific encoding.
 * @param string $encoding the encoding being checked.
 * @return string the MIME charset string for character encoding encoding.
 */

mb_http_output('sjis-win');
ob_start('mb_output_handler');
var_dump(mb_preferred_mime_name('sjis-win'));
header('Content-Type: text/html; charset=' . mb_preferred_mime_name('sjis-win'));