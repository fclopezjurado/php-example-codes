<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:17
 *
 * Returns the translation table used by "htmlspecialchars()" and "htmlentities()" functions.
 * http://php.net/manual/en/function.get-html-translation-table.php
 * @param int $table which table to return. Either HTML_ENTITIES or HTML_SPECIALCHARS.
 * @param int $flags A bit mask of one or more of the following flags, which specify which quotes the table will contain
 * as well as which document type the table is for. The default is ENT_COMPAT | ENT_HTML401.
 * @param string $encoding encoding to use. If omitted, the default value for this argument is ISO-8859-1 in versions
 * of PHP prior to 5.4.0, and UTF-8 from PHP 5.4.0 onwards.
 * @return array the translation table as an array, with the original characters as keys and entities as values.
 */

var_dump(get_html_translation_table(HTML_ENTITIES, ENT_QUOTES | ENT_HTML5));