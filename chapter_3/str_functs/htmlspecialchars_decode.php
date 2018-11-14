<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:18
 *
 * Convert special HTML entities back to characters. The converted entities are: &amp;, &quot; (when ENT_NOQUOTES is
 * not set), &#039; (when ENT_QUOTES is set), &lt; and &gt;.
 * http://php.net/manual/en/function.htmlspecialchars-decode.php
 * @param string $string the string to decode.
 * @param int $flags A bit mask of one or more of the following flags, which specify how to handle quotes and which
 * document type to use. The default is ENT_COMPAT | ENT_HTML401.
 * @return string the decoded string.
 */

$str1 = "<p>this -&gt; &quot;</p>\n";
$str = "<p>this -&gt; &quot; &amp; &#039; &lt; &gt;</p>\n";

var_dump(htmlspecialchars_decode($str));
/**
 * Note that here the quotes aren't converted
 */
var_dump(htmlspecialchars_decode($str, ENT_NOQUOTES));
var_dump(htmlspecialchars_decode($str, ENT_QUOTES));