<?PHP
	require 'includes/master.inc.php';

	$client = new Services_Twilio(TWILIO_KEY, TWILIO_PRIVATE_KEY);
	$sms = $client->account->sms_messages->create(TWILIO_FROM, $_GET['to'], $_GET['msg']);
