<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 23/10/18
 * Time: 9:59
 *
 * Jump to another section in the program.
 * https://secure.php.net/manual/en/control-structures.goto.php
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 */

goto a;
echo 'Foo';

a:
echo 'Bar';

for ($i = 0, $j = 50; $i < 100; $i++) {
    while ($j--) {
        if ($j==17) goto end;
    }
}

echo "i = $i";
end:
echo 'j hit 17' . PHP_EOL;

/**
 * Fatal error.
 */
/*goto loop;

for ($i = 0, $j = 50; $i < 100; $i++) {
    while($j--) {
        loop:
    }
}*/

echo "$i = $i";