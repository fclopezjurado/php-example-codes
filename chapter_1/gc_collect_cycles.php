<?php
/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 2/11/18
 * Time: 14:10
 *
 * Forces collection of any existing garbage cycles.
 * http://php.net/manual/en/function.gc-collect-cycles.php
 * Returns number of collected cycles.
 */

var_dump(gc_collect_cycles());