<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:13
 *
 * Decode a uuencoded string. Neither accepts the begin nor the end line, which are part of uuencoded files.
 * http://php.net/manual/en/function.convert-uudecode.php
 * @param string $data the uuencoded data.
 * @return string|bool the decoded data as a string or false on failure.
 */

var_dump(convert_uudecode("+22!L;W9E(%!(4\"$`\n`"));