<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:40
 *
 * Encode string for MIME header.
 * http://php.net/manual/en/function.mb-encode-mimeheader.php
 * Encodes a given string str by the MIME header encoding scheme.
 * @param string $str the string being encoded. Its encoding should be same as mb_internal_encoding().
 * @param string $charset specifies the name of the character set in which str is represented in. The default value is
 * determined by the current NLS setting (mbstring.language).
 * @param string $transfer_encoding specifies the scheme of MIME encoding. It should be either "B" (Base64) or "Q"
 * (Quoted-Printable). Falls back to "B" if not given.
 * @param string $linefeed specifies the EOL (end-of-line) marker with which mb_encode_mimeheader() performs
 * line-folding (a » RFC term, the act of breaking a line longer than a certain length into multiple lines. The length
 * is currently hard-coded to 74 characters). Falls back to "\r\n" (CRLF) if not given.
 * @param int $indent indentation of the first line (number of characters in the header before str).
 * @return string a converted version of the string represented in ASCII.
 */

mb_internal_encoding('iso-8859-2');
setlocale(LC_CTYPE, 'hu_HU');
var_dump(mb_encode_mimeheader(trim('the text with spec. chars: &#337; &#368; &#336; &#369;, �'),
    'iso-8859-2', 'Q', "\n\t"));