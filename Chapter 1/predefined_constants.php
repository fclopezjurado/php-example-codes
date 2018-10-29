<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 26/10/18
 * Time: 14:48
 *
 * Predefined constants.
 * https://secure.php.net/manual/en/reserved.constants.php
 */

/*
 * The current PHP version as a string in "major.minor.release[extra]" notation.
 * @returns int
 */
var_dump(PHP_VERSION);

/*
 * The current PHP "major" version as an integer (e.g., int(5) from version "5.2.7-extra"). Available since PHP 5.2.7.
 * @returns int
 */
var_dump(PHP_MAJOR_VERSION);

/*
 * The current PHP "minor" version as an integer (e.g., int(2) from version "5.2.7-extra"). Available since PHP 5.2.7.
 * @returns int
 */
var_dump(PHP_MINOR_VERSION);

/*
 * The current PHP "release" version as an integer (e.g., int(7) from version "5.2.7-extra"). Available since PHP 5.2.7.
 * @returns int
 */
var_dump(PHP_RELEASE_VERSION);

/*
 * The current PHP "release" version as an integer (e.g., int(7) from version "5.2.7-extra"). Available since PHP 5.2.7.
 * @returns int
 */
var_dump(PHP_VERSION_ID);

/*
 * The current PHP "extra" version as a string (e.g., '-extra' from version "5.2.7-extra"). Often used by distribution
 * vendors to indicate a package version. Available since PHP 5.2.7.
 * @returns string
 */
var_dump(PHP_EXTRA_VERSION);

/*
 * Zend Thread Safety (ZTS) is enabled or not. Returns value of "0" (false) indicates compiled php is non thread safe).
 * @returns int
 */
var_dump(PHP_ZTS);

/*
 * Indication of whether your PHP binary was compiled in a debug configuration.
 * @returns int
 */
var_dump(PHP_DEBUG);

/*
 * The maximum length of file names (including path) supported by this build of PHP. Available since PHP 5.3.0.
 * @returns int
 */
var_dump(PHP_MAXPATHLEN);

/*
 * The operating system PHP was built for.
 * @returns string
 */
var_dump(PHP_OS);

/*
 * The operating system family PHP was built for. Either of 'Windows', 'BSD', 'Darwin', 'Solaris', 'Linux' or
 * 'Unknown'. Available as of PHP 7.2.0.
 * @returns string
 */
var_dump(PHP_OS_FAMILY);

/*
 * The Server API for this build of PHP. See also php_sapi_name().
 * @returns string
 */
var_dump(PHP_SAPI);

/*
 * The correct 'End Of Line' symbol for this platform. Available since PHP 5.0.2
 * @returns string
 */
var_dump(PHP_EOL);

/*
 * The largest integer supported in this build of PHP. Usually int(2147483647) in 32 bit systems and int(9223372036854775807) in 64 bit systems. Available since PHP 5.0.5
 * @returns int
 */
var_dump(PHP_INT_MAX);

/*
 * The smallest integer supported in this build of PHP. Usually int(-2147483648) in 32 bit systems and
 * int(-9223372036854775808) in 64 bit systems. Available since PHP 7.0.0. Usually, PHP_INT_MIN === ~PHP_INT_MAX.
 * @returns int
 */
var_dump(PHP_INT_MIN);

/*
 * The size of an integer in bytes in this build of PHP. Available since PHP 5.0.5
 * @returns int
 */
var_dump(PHP_INT_SIZE);

/*
 * Number of decimal digits that can be rounded into a float and back without precision loss. Available as of PHP 7.2.0.
 * @returns int
 */
var_dump(PHP_FLOAT_DIG);

/*
 * Smallest representable positive number x, so that x + 1.0 != 1.0. Available as of PHP 7.2.0.
 * @returns float
 */
var_dump(PHP_FLOAT_EPSILON);

/*
 * Smallest representable floating point number. Available as of PHP 7.2.0.
 * @returns float
 */
var_dump(PHP_FLOAT_MIN);

/*
 * Largest representable floating point number. Available as of PHP 7.2.0.
 * @returns float
 */
var_dump(PHP_FLOAT_MAX);

/*
 * Current PHP search path.
 * @returns string
 */
var_dump(DEFAULT_INCLUDE_PATH);

/*
 * Pear installation directory.
 * @returns string
 */
var_dump(PEAR_INSTALL_DIR);

/*
 * Path where pear extension is.
 * @returns string
 */
var_dump(PEAR_EXTENSION_DIR);

/*
 * The value "--prefix" was set to at configure.
 * @returns string
 */
var_dump(PHP_PREFIX);

/*
 * Specifies where the binaries were installed into.
 * @returns string
 */
var_dump(PHP_BINDIR);

/*
 * Specifies the PHP binary path during script execution. Available since PHP 5.4.
 * @returns string
 */
var_dump(PHP_BINARY);

/*
 * Specifies where the manpages were installed into. Available since PHP 5.3.7.
 * @returns string
 */
var_dump(PHP_MANDIR);

/*
 * Path where php libraries are.
 * @returns string
 */
var_dump(PHP_LIBDIR);

/*
 * PHP data installation directory.
 * @returns string
 */
var_dump(PHP_DATADIR);

/*
 * Path in system where PHP is installed.
 * @returns string
 */
var_dump(PHP_SYSCONFDIR);

/*
 * PHP path for local state.
 * @returns string
 */
var_dump(PHP_LOCALSTATEDIR);

/*
 * Directory where php.ini is.
 * @returns string
 */
var_dump(PHP_CONFIG_FILE_PATH);

/*
 * Directory where php.ini is.
 * @returns string
 */
var_dump(PHP_CONFIG_FILE_SCAN_DIR);

/*
 * The build-platform's shared library suffix, such as "so" (most Unixes) or "dll" (Windows).
 * @returns string
 */
var_dump(PHP_SHLIB_SUFFIX);

/*
 * The maximum number of file descriptors for select system calls. Available as of PHP 7.1.0.
 * @returns string
 */
var_dump(PHP_FD_SETSIZE);

/*
 * Error reporting constant.
 * @returns int
 */
var_dump(E_ERROR);

/*
 * Error reporting constant for warnings.
 * @returns int
 */
var_dump(E_WARNING);

/*
 * Error reporting constant for parser errors.
 * @returns int
 */
var_dump(E_PARSE);

/*
 * Error reporting constant for php notices.
 * @returns int
 */
var_dump(E_NOTICE);

/*
 * Error reporting constant for core errors.
 * @returns int
 */
var_dump(E_CORE_ERROR);

/*
 * Error reporting constant for core warnings.
 * @returns int
 */
var_dump(E_CORE_WARNING);

/*
 * Error reporting constant for compilation errors.
 * @returns int
 */
var_dump(E_COMPILE_ERROR);

/*
 * Error reporting constant for compilation warnings
 * @returns int
 */
var_dump(E_COMPILE_WARNING);

/*
 * Error reporting constant for user errors
 * @returns int
 */
var_dump(E_USER_ERROR);

/*
 * Error reporting constant user warnings
 * @returns int
 */
var_dump(E_USER_WARNING);

/*
 * Error reporting constant user notices
 * @returns int
 */
var_dump(E_USER_NOTICE);

/*
 * Error reporting constant for recoverable errors
 * @returns int
 */
var_dump(E_RECOVERABLE_ERROR);

/*
 * Error reporting constant for errors where code is deprecated.
 * @returns int
 */
var_dump(E_DEPRECATED);

/*
 * Error reporting constant for errors where user code is deprecated
 * @returns int
 */
var_dump(E_USER_DEPRECATED);

/*
 * Error reporting constant for all errors.
 * @returns int
 */
var_dump(E_ALL);

/*
 * Error reporting constant. Messages will be issued to warn you about code usage which is deprecated or which may not
 * be future-proof.
 * @returns int
 */
var_dump(E_STRICT);

/*
 * Halts the compiler execution.
 * @returns int
 */
var_dump(__COMPILER_HALT_OFFSET__);

/*
 * @returns bool
 */
var_dump(true);

/*
 * @returns bool
 */
var_dump(false);

/*
 * @returns null
 */
var_dump(null);