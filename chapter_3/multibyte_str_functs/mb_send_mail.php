<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:49
 *
 * Send encoded mail.
 * http://php.net/manual/en/function.mb-send-mail.php
 * Sends email. Headers and messages are converted and encoded according to the mb_language() setting. It's a wrapper
 * function for mail(), so see also mail() for details.
 * @param string $to the mail addresses being sent to. Multiple recipients may be specified by putting a comma between
 * each address in to. This parameter is not automatically encoded.
 * @param string $subject the subject of the mail.
 * @param string $message the message of the mail.
 * @param array|string $additional_headers (optional) String or array to be inserted at the end of the email header.
 * This is typically used to add extra headers (From, Cc, and Bcc). Multiple extra headers should be separated with a
 * CRLF (\r\n). Validate parameter not to be injected unwanted headers by attackers.
 * If an array is passed, its keys are the header names and its values are the respective header values.
 * NOTE: When sending mail, the mail must contain a From header. This can be set with the additional_headers
 * parameter, or a default can be set in php.ini.
 * Failing to do this will result in an error message similar to Warning: mail(): "sendmail_from" not set in php.ini
 * or custom "From:" header missing. The From header sets also Return-Path under Windows.
 * NOTE: If messages are not received, try using a LF (\n) only. Some Unix mail transfer agents (most notably » qmail)
 * replace LF by CRLF automatically (which leads to doubling CR if CRLF is used). This should be a last resort, as it
 * does not comply with » RFC 2822.
 * @param string $additional_parameter is a MTA command line parameter. It is useful when setting the correct
 * Return-Path header when using sendmail.
 * This parameter is escaped by escapeshellcmd() internally to prevent command execution. escapeshellcmd() prevents
 * command execution, but allows to add addtional parameters. For security reason, this parameter should be validated.
 * Since escapeshellcmd() is applied automatically, some characters that are allowed as email addresses by internet
 * RFCs cannot be used. Programs that are required to use these characters mail() cannot be used.
 * The user that the webserver runs as should be added as a trusted user to the sendmail configuration to prevent a
 * 'X-Warning' header from being added to the message when the envelope sender (-f) is set using this method. For
 * sendmail users, this file is /etc/mail/trusted-users.
 * @return bool TRUE on success or FALSE on failure.
 */

$headers = "MIME-Version: 1.0 \n" . "From: СоциоЧат<test@test.com> \n" . "Reply-To: СоциоЧат<test@test.com> \n"
    . "Content-Type: text/html;charset=UTF-8\n";
$topic = 'Для вас есть сообщение';
$msg = "<h2>Вам пришло сообщение от пользователя</h2><hr>";
$msg .= 'Вернуться в <a href="http://www.google.com">СоциоЧат</a>';

var_dump(mb_send_mail('test@test.com', 'Для вас есть сообщение', $msg, $headers));