<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 30/10/18
 * Time: 11:49
 *
 * Stores server and execution environment information.
 * https://secure.php.net/manual/en/reserved.variables.server.php
 * $_SERVER is an array containing information such as headers, paths, and script locations. The entries in this array
 * are created by the web server.
 * NOTE: PHP notice when an array element does not exist.
 */

/**
 * The name of the server host under which the current script is executing. If the script is running on a virtual host,
 * this will be the value defined for that virtual host.
 */
echo $_SERVER['SERVER_NAME'] . '</br>';

/**
 * What revision of the CGI specification the server is using; i.e. 'CGI/1.1'.
 */
echo $_SERVER['GATEWAY_INTERFACE'] . '</br>';

/**
 * The IP address of the server under which the current script is executing.
 */
echo $_SERVER['SERVER_ADDR'] . '</br>';

/**
 * The name of the server host under which the current script is executing. If the script is running on a virtual
 * host, this will be the value defined for that virtual host.
 */
echo $_SERVER['SERVER_NAME'] . '</br>';

/**
 * Server identification string, given in the headers when responding to requests.
 */
echo $_SERVER['SERVER_SOFTWARE'] . '</br>';

/**
 * Name and revision of the information protocol via which the page was requested; i.e. 'HTTP/1.0';
 */
echo $_SERVER['SERVER_PROTOCOL'] . '</br>';

/**
 * Which request method was used to access the page; i.e. 'GET', 'HEAD', 'POST', 'PUT'.
 */
echo $_SERVER['REQUEST_METHOD'] . '</br>';

/**
 * The timestamp of the start of the request. Available since PHP 5.1.0.
 */
echo $_SERVER['REQUEST_TIME'] . '</br>';

/**
 * The timestamp of the start of the request, with microsecond precision. Available since PHP 5.4.0.
 */
echo $_SERVER['REQUEST_TIME_FLOAT'] . '</br>';

/**
 * The query string, if any, via which the page was accessed.
 */
echo $_SERVER['QUERY_STRING'] . '</br>';

/**
 * The document root directory under which the current script is executing, as defined in the server's configuration
 * file.
 */
echo $_SERVER['DOCUMENT_ROOT'] . '</br>';

/**
 * Contents of the Accept: header from the current request, if there is one.
 */
echo $_SERVER['HTTP_ACCEPT'] . '</br>';

/**
 * Contents of the Accept-Charset: header from the current request, if there is one. Example: 'iso-8859-1,*,utf-8'.
 */
echo $_SERVER['HTTP_ACCEPT_CHARSET'] . '</br>';

/**
 * Contents of the Accept-Encoding: header from the current request, if there is one. Example: 'gzip'.
 */
echo $_SERVER['HTTP_ACCEPT_ENCODING'] . '</br>';

/**
 * Contents of the Accept-Language: header from the current request, if there is one. Example: 'en'.
 */
echo $_SERVER['HTTP_ACCEPT_LANGUAGE'] . '</br>';

/**
 * Contents of the Connection: header from the current request, if there is one. Example: 'Keep-Alive'.
 */
echo $_SERVER['HTTP_CONNECTION'] . '</br>';

/**
 * Contents of the Host: header from the current request, if there is one.
 */
echo $_SERVER['HTTP_HOST'] . '</br>';

/**
 * The address of the page (if any) which referred the user agent to the current page. This is set by the user agent.
 * Not all user agents will set this, and some provide the ability to modify HTTP_REFERER as a feature. In short, it
 * cannot really be trusted.
 */
echo $_SERVER['HTTP_REFERER'] . '</br>';

/**
 * Contents of the User-Agent: header from the current request, if there is one. This is a string denoting the user
 * agent being which is accessing the page. A typical example is: Mozilla/4.5 [en] (X11; U; Linux 2.2.9 i586). Among
 * other things, you can use this value with get_browser() to tailor your page's output to the capabilities of the
 * user agent.
 */
echo $_SERVER['HTTP_USER_AGENT'] . '</br>';

/**
 * Set to a non-empty value if the script was queried through the HTTPS protocol.
 */
echo $_SERVER['HTTPS'] . '</br>';

/**
 * The IP address from which the user is viewing the current page.
 */
echo $_SERVER['REMOTE_ADDR'] . '</br>';

/**
 * The Host name from which the user is viewing the current page. The reverse dns lookup is based on the REMOTE_ADDR
 * of the user.
 */
echo $_SERVER['REMOTE_HOST'] . '</br>';

/**
 * The port being used on the user's machine to communicate with the web server.
 */
echo $_SERVER['REMOTE_PORT'] . '</br>';

/**
 * The authenticated user.
 */
echo $_SERVER['REMOTE_USER'] . '</br>';

/**
 * The authenticated user if the request is internally redirected.
 */
echo $_SERVER['REDIRECT_REMOTE_USER'] . '</br>';

/**
 * The absolute pathname of the currently executing script.
 */
echo $_SERVER['SCRIPT_FILENAME'] . '</br>';

/**
 * The value given to the SERVER_ADMIN (for Apache) directive in the web server configuration file. If the script is
 * running on a virtual host, this will be the value defined for that virtual host.
 */
echo $_SERVER['SERVER_ADMIN'] . '</br>';

/**
 * The port on the server machine being used by the web server for communication. For default setups, this will be
 * '80'; using SSL, for instance, will change this to whatever your defined secure HTTP port is.
 */
echo $_SERVER['SERVER_PORT'] . '</br>';

/**
 * String containing the server version and virtual host name which are added to server-generated pages, if enabled.
 */
echo $_SERVER['SERVER_SIGNATURE'] . '</br>';

/**
 * Filesystem- (not document root-) based path to the current script, after the server has done any virtual-to-real
 * mapping.
 */
echo $_SERVER['PATH_TRANSLATED'] . '</br>';

/**
 * Contains the current script's path. This is useful for pages which need to point to themselves. The __FILE__
 * constant contains the full path and filename of the current (i.e. included) file.
 */
echo $_SERVER['SCRIPT_NAME'] . '</br>';

/**
 * The URI which was given in order to access this page; for instance, '/index.html'.
 */
echo $_SERVER['REQUEST_URI'] . '</br>';

/**
 * When doing Digest HTTP authentication this variable is set to the 'Authorization' header sent by the client (which
 * you should then use to make the appropriate validation).
 */
echo $_SERVER['PHP_AUTH_DIGEST'] . '</br>';

/**
 * When doing HTTP authentication this variable is set to the username provided by the user.
 */
echo $_SERVER['PHP_AUTH_USER'] . '</br>';

/**
 * When doing HTTP authentication this variable is set to the password provided by the user.
 */
echo $_SERVER['PHP_AUTH_PW'] . '</br>';

/**
 * When doing HTTP authentication this variable is set to the authentication type.
 */
echo $_SERVER['AUTH_TYPE'] . '</br>';

/**
 * Contains any client-provided pathname information trailing the actual script filename but preceding the query
 * string, if available. For instance, if the current script was accessed via the
 * URL http://www.example.com/php/path_info.php/some/stuff?foo=bar, then $_SERVER['PATH_INFO'] would
 * contain /some/stuff.

 */
echo $_SERVER['PATH_INFO'] . '</br>';

/**
 * Original version of 'PATH_INFO' before processed by PHP.
 */
echo $_SERVER['ORIG_PATH_INFO'] . '</br>';

/**
 * Contains the number of command line parameters passed to the script (if run on the command line).
 */
echo $_SERVER['argc'] . '</br>';

/**
 * Array of arguments passed to the script. When the script is run on the command line, this gives C-style access to
 * the command line parameters. When called via the GET method, this will contain the query string.
 */
echo $_SERVER['argv'] . '</br>';