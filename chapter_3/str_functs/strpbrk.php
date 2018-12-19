<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:27
 *
 * string strpbrk ( string $haystack , string $char_list )
 *
 * Search a string for any of a set of characters.
 * http://php.net/manual/en/function.strpbrk.php
 * @param string $haystack the string where char_list is looked for.
 * @param string this parameter is case sensitive.
 * @return string|bool starting from the character found, or FALSE if it is not found.
 */

// this echoes "is is a Simple text." because 'i' is matched first
var_dump(strpbrk('This is a Simple text.', 'mi'));

// this echoes "Simple text." because chars are case sensitive
var_dump(strpbrk('This is a Simple text.', 'S'));

// returns false because character is not matched in haystack.
var_dump(strpbrk('This is a Simple text.', 'y'));