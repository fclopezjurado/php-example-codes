<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 2/11/18
 * Time: 12:06
 *
 * An associative array of items uploaded to the current script via the HTTP POST method. The structure of this array
 * is outlined in the POST method uploads section.
 * http://php.net/manual/en/reserved.variables.files.php
 */

/**
 * An example of uploaded file:
 *
 * array(1) {
 *  ["file"]=>
 *      array(5) {
 *          ["name"]=> string(9) "README.md
 *          ["type"]=> string(13) "text/markdown"
 *          ["tmp_name"]=> string(25) "/opt/lampp/temp/phpeLBfUp"
 *          ["error"]=> int(0)
 *          ["size"]=> int(314)
 *      }
 * }
 */
var_dump($_FILES);