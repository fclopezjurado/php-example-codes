<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:17
 *
 * string html_entity_decode ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401
 * [, string $encoding = ini_get("default_charset") ]] )
 *
 * Convert HTML entities to their corresponding characters. Decodes all the entities (including all numeric entities)
 * that a) are necessarily valid for the chosen document type and b) whose character or characters are in the coded
 * character set associated with the chosen encoding and are permitted in the chosen document type. All other entities
 * are left as is.
 * http://php.net/manual/en/function.html-entity-decode.php
 * @param string the input string.
 * @param int $flags a bit mask of one or more of the following flags, which specify how to handle quotes and which
 * document type to use. The default is ENT_COMPAT | ENT_HTML401.
 * @param string $encoding an optional argument defining the encoding used when converting characters.
 * @return string the decoded string.
 */

$orig = "I'll \"walk\" the <b>dog</b> now";
$a = htmlentities($orig);
$b = html_entity_decode($a);
$input = 'Fovi&#269;';

var_dump($a);
var_dump($b);

$output = preg_replace_callback("/(&#[0-9]+;)/", function ($m) {
    return mb_convert_encoding($m[1], "UTF-8", "HTML-ENTITIES");
}, $input);

var_dump($output);