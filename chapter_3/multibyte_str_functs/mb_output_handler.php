<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:47
 *
 * Callback function converts character encoding in output buffer.
 * http://php.net/manual/en/function.mb-output-handler.php
 * mb_output_handler() is ob_start() callback function. mb_output_handler() converts characters in the output buffer
 * from internal character encoding to HTTP output character encoding.
 * @param string $contents the contents of the output buffer.
 * @param int $status the status of the output buffer.
 * @return string the converted string.
 */

mb_http_output("UTF-8");
ob_start('mb_output_handler');