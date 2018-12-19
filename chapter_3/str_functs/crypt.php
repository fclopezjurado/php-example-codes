<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:16
 *
 * string crypt ( string $str [, string $salt ] )
 *
 * One-way string hashing.
 * http://php.net/manual/en/function.crypt.php
 * crypt() will return a hashed string using the standard Unix DES-based algorithm or alternative algorithms that may
 * be available on the system. The salt parameter is optional. However, crypt() creates a weak hash without the salt.
 * PHP 5.6 or later raise an E_NOTICE error without it. Make sure to specify a strong enough salt for better security.
 * @param string $str string to be hashed.
 * @param string $salt an optional salt string to base the hashing on. If not provided, the behaviour is defined by
 * the algorithm implementation and can lead to unexpected results.
 * @return string the hashed string or a string that is shorter than 13 characters and is guaranteed to differ from
 * the salt on failure.
 */

/**
 * salt automatically generated.
 * PHP notice when second parameter of call to "crypt" function (salt) is not provided.
 */
$user_input = 'mypassword';
$hashed_password = crypt($user_input);

/**
 * You should pass the entire results of crypt() as the salt for comparing a password, to avoid problems when
 * different hashing algorithms are used. (As it says above, standard DES-based password hashing uses a 2-character
 * salt, but MD5-based hashing uses 12.)
 */
if (hash_equals($hashed_password, crypt($user_input, $hashed_password))) {
    var_dump('Password verified!');
}

/**
 * Using crypt() with different hash types.
 * These salts are examples only, and should not be used verbatim in your code. You should generate a distinct,
 * correctly-formatted salt for each password.
 */
if (CRYPT_STD_DES === 1) {
    var_dump('Standard DES: ' . crypt('rasmuslerdorf', 'rl'));
}

if (CRYPT_EXT_DES === 1) {
    var_dump('Extended DES: ' . crypt('rasmuslerdorf', '_J9..rasm'));
}

if (CRYPT_MD5 === 1) {
    var_dump('MD5: ' . crypt('rasmuslerdorf', '$1$rasmusle$'));
}

if (CRYPT_BLOWFISH === 1) {
    var_dump('Blowfish: ' . crypt('rasmuslerdorf', '$2a$07$usesomesillystringforsalt$'));
}

if (CRYPT_SHA256 === 1) {
    var_dump('SHA-256: ' . crypt('rasmuslerdorf', '$5$rounds=5000$usesomesillystringforsalt$'));
}

if (CRYPT_SHA512 === 1) {
    var_dump('SHA-512: ' . crypt('rasmuslerdorf', '$6$rounds=5000$usesomesillystringforsalt$'));
}