<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:22
 *
 * Output a formatted string.
 * http://php.net/manual/en/function.printf.php
 * @param string $format see formats for sprintf() in notes for a description of format.
 * @param ... $args variadic parameter to include all variables to apply in formatting process.
 * @return int returns the length of the outputted string.
 */

$n =  43951789;
$u = -43951789;
$c = 65; // ASCII 65 is 'A'

printf("(9.95 * 100) = %d\n", (9.95 * 100));
printf("%.1f\n",2.12);
printf("%d\n", "17,999");
printf("%d\n",10023123553.45634663);
printf("%.0f\n",10023123553.45634663);
printf("%.02lf\n", 1.035);
printf("%.02lf\n", round(1.035, 2));

// notice the double %%, this prints a literal '%' character
printf("%%b = '%b'\n", $n); // binary representation
printf("%%c = '%c'\n", $c); // print the ascii character, same as chr() function
printf("%%d = '%d'\n", $n); // standard integer representation
printf("%%e = '%e'\n", $n); // scientific notation
printf("%%u = '%u'\n", $n); // unsigned integer representation of a positive integer
printf("%%u = '%u'\n", $u); // unsigned integer representation of a negative integer
printf("%%f = '%f'\n", $n); // floating point representation
printf("%%o = '%o'\n", $n); // octal representation
printf("%%s = '%s'\n", $n); // string representation
printf("%%x = '%x'\n", $n); // hexadecimal representation (lower-case)
printf("%%X = '%X'\n", $n); // hexadecimal representation (upper-case)
printf("%%+d = '%+d'\n", $n); // sign specifier on a positive integer
printf("%%+d = '%+d'\n", $u); // sign specifier on a negative integer

$s = 'monkey';
$t = 'many monkeys';

printf("[%s]\n", $s); // standard string output
printf("[%10s]\n", $s); // right-justification with spaces
printf("[%-10s]\n", $s); // left-justification with spaces
printf("[%010s]\n", $s); // zero-padding works on strings too
printf("[%'#10s]\n", $s); // use the custom padding character '#'
printf("[%10.10s]\n", $t); // left-justification but with a cutoff of 10 characters