<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 02/09/20
 * Time: 9:38
 */

# Infinite loop
for ($index = 0.1; $index < 1; $index + 0.1) {
    var_dump($index);
}