<?PHP
	require 'config.inc.php';

	$nest = new Nest(NEST_USERNAME, NEST_PASSWORD);

	$value = ($_GET['away'] == 1) ? true : false;

	print_r($nest->setAway($value));