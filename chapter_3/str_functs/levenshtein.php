<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:19
 *
 * int levenshtein ( string $str1 , string $str2 )
 * int levenshtein ( string $str1 , string $str2 , int $cost_ins , int $cost_rep , int $cost_del )
 *
 * Calculate Levenshtein distance between two strings.
 * http://php.net/manual/en/function.levenshtein.php
 * The Levenshtein distance is defined as the minimal number of characters you have to replace, insert or delete to
 * transform str1 into str2.
 * @param string $str1 one of the strings being evaluated for Levenshtein distance.
 * @param string $str2 one of the strings being evaluated for Levenshtein distance.
 * @param int $const_ins defines the cost of insertion.
 * @param int $cost_rep defines the cost of replacement.
 * @param int $cost_del defines the cost of deletion.
 * @return int levenshtein-distance between the two argument strings or -1, if one of the argument strings is longer
 * than the limit of 255 characters.
 */

# input misspelled word
$input = 'carrrot';

# array of words to check against
$words  = array('apple','pineapple','banana','orange',
    'radish','carrot','pea','bean','potato');

# no shortest distance found, yet
$shortest = -1;

// loop through words to find the closest
foreach ($words as $word) {

    // calculate the distance between the input word, and the current word
    $lev = levenshtein($input, $word);

    // check for an exact match
    if ($lev == 0) {
        // closest word is this one (exact match)
        $closest = $word;
        $shortest = 0;
        // break out of the loop; we've found an exact match
        break;
    }

    /**
     * if this distance is less than the next found shortest distance, OR if a next shortest word has not yet been
     * found.
     */
    if ($lev <= $shortest || $shortest < 0) {
        // set the closest match, and shortest distance
        $closest  = $word;
        $shortest = $lev;
    }
}

var_dump("Input word: $input");
($shortest == 0) ?
    var_dump("Exact match found: $closest") :
    var_dump("Did you mean: $closest?");

var_dump(levenshtein(425, 75674));