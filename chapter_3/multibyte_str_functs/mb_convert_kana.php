<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:39
 *
 * Convert "kana" one from another ("zen-kaku", "han-kaku" and more).
 * http://php.net/manual/en/function.mb-convert-kana.php
 * Performs a "han-kaku" - "zen-kaku" conversion for string str. This function is only useful for Japanese.
 * @param string $str the string being converted.
 * @param string $option the conversion option. "KV" by default. Specify with a combination of following options.
 * r	Convert "zen-kaku" alphabets to "han-kaku"
 * R	Convert "han-kaku" alphabets to "zen-kaku"
 * n	Convert "zen-kaku" numbers to "han-kaku"
 * N	Convert "han-kaku" numbers to "zen-kaku"
 * a	Convert "zen-kaku" alphabets and numbers to "han-kaku"
 * A	Convert "han-kaku" alphabets and numbers to "zen-kaku" (Characters included in "a", "A" options are
 * U+0021 - U+007E excluding U+0022, U+0027, U+005C, U+007E)
 * s	Convert "zen-kaku" space to "han-kaku" (U+3000 -> U+0020)
 * S	Convert "han-kaku" space to "zen-kaku" (U+0020 -> U+3000)
 * k	Convert "zen-kaku kata-kana" to "han-kaku kata-kana"
 * K	Convert "han-kaku kata-kana" to "zen-kaku kata-kana"
 * h	Convert "zen-kaku hira-gana" to "han-kaku kata-kana"
 * H	Convert "han-kaku kata-kana" to "zen-kaku hira-gana"
 * c	Convert "zen-kaku kata-kana" to "zen-kaku hira-gana"
 * C	Convert "zen-kaku hira-gana" to "zen-kaku kata-kana"
 * V	Collapse voiced sound notation and convert them into a character. Use with "K","H"
 * @param string $encoding the encoding parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 * @return string the converted string.
 */

// Convert all "kana" to "zen-kaku" "kata-kana"
var_dump(mb_convert_kana('だくてん', 'KVC'));