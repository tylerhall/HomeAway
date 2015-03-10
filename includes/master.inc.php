<?PHP
    // Application flag
    define('SPF', true);

    // https://twitter.com/#!/marcoarment/status/59089853433921537
    date_default_timezone_set('UTC');

    // Determine our absolute document root
    define('DOC_ROOT', realpath(dirname(__FILE__) . '/../'));

    // Global include files
    require DOC_ROOT . '/includes/functions.inc.php';  // spl_autoload_register() is contained in this file
	require DOC_ROOT . '/includes/twilio-php/Services/Twilio.php';
	require DOC_ROOT . '/includes/Postmark.php';
	require DOC_ROOT . '/includes/class.nest.php';

    // Fix magic quotes
    if(get_magic_quotes_gpc())
    {
        $_POST    = fix_slashes($_POST);
        $_GET     = fix_slashes($_GET);
        $_REQUEST = fix_slashes($_REQUEST);
        $_COOKIE  = fix_slashes($_COOKIE);
    }

	require 'config.inc.php';