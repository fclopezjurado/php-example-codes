<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:20
 *
 * string md5_file ( string $filename [, bool $raw_output = FALSE ] )
 *
 * Calculates the md5 hash of a given file.
 * http://php.net/manual/en/function.md5-file.php
 * @param string $filename the filename.
 * @param bool $raw_output if the optional raw_output is set to true, then the md5 digest is instead returned in raw
 * binary format with a length of 16.
 * @return string|bool a string on success, false otherwise.
 */

var_dump(md5_file('md5.php'));
var_dump(md5_file('md5.php', true));