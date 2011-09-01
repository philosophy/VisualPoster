<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

define('SMARTY_DIR', 'C:\xampp\htdocs\visualposter\system\libraries\Smarty-3.0.8\libs\\');
/* End of file constants.php */
/* Location: ./application/config/constants.php */

define('ERROR_LOG', 1);
define('INFO_LOG', 2);

/* LIST OF HTTP STATUS */
/* Request is Ok - fetch or get is good */
define('HTTP_OK', 200);
/* Created - post or successfully created */
define('HTTP_CREATED', 201);
/* General Bad Request - fail request or missing arguments */
define('HTTP_BAD_REQUEST', 400);
/* Forbidden */
define('HTTP_FORBIDDEN', 403);
/* Not Found - record/resource not found */
define('HTTP_NOT_FOUND', 404);
/* Precondition Failed - fail in condition, invalid post arg format, fail in validation */
define('HTTP_FAIL_PRECON', 412);