<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:23
 *
 * string sha1_file ( string $filename [, bool $raw_output = FALSE ] )
 *
 * Calculate the sha1 hash of a file.
 * http://php.net/manual/en/function.sha1-file.php
 * Calculates the sha1 hash of the file specified by filename using the » US Secure Hash Algorithm 1, and returns that
 * hash. The hash is a 40-character hexadecimal number.
 * @param string $filename the filename of the file to hash.
 * @param bool $raw_output When true, returns the digest in raw binary format with a length of 20.
 * @return string|bool a string on success, false otherwise.
 */

var_dump(sha1_file('sha1.php'));
var_dump(sha1_file('sha1.php', true));