<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:26
 *
 * Strip HTML and PHP tags from a string.
 * http://php.net/manual/en/function.strip-tags.php
 * This function tries to return a string with all NULL bytes, HTML and PHP tags stripped from a given str. It uses
 * the same tag stripping state machine as the fgetss() function.
 * @param string $str the input string.
 * @param string $allowable_tags you can use the optional second parameter to specify tags which should not be
 * stripped.
 * NOTE: HTML comments and PHP tags are also stripped. This is hardcoded and can not be changed with allowable_tags.
 * NOTE: In PHP 5.3.4 and later, self-closing XHTML tags are ignored and only non-self-closing tags should be used in
 * allowable_tags. For example, to allow both <br> and <br/>, you should use: strip_tags($input, '<br>');
 * @return string the stripped string.
 */

$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
var_dump(strip_tags($text));
var_dump(strip_tags($text, '<p><a>'));

$str = <<<HEREDOC
<!DOCTYPE html>
<html>
<body>
<h2>Size Attributes</h2>
<p>Images in HTML have a set of size attributes, which specifies the width and height of the image:</p>
<img src="img_girl.jpg" width="500" height="600">
</body>
</html>
HEREDOC;

var_dump(strip_tags($str));
var_dump(strip_tags($str, '<h2>'));