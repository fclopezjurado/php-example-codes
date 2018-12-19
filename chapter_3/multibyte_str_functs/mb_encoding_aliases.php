<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:41
 *
 * array mb_encoding_aliases ( string $encoding )
 *
 * Get aliases of a known encoding type.
 * http://php.net/manual/en/function.mb-encoding-aliases.php
 * Returns an array of aliases for a known encoding type.
 * @param string $encoding the encoding type being checked, for aliases.
 * @param array|bool a numerically indexed array of encoding aliases on success, or FALSE on failure.
 * @throws Throwable E_WARNING level error if $encoding is unknown.
 */

var_dump(mb_encoding_aliases('ASCII'));
var_dump(mb_encoding_aliases('dafdsadadfas'));