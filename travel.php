<?PHP
	require 'includes/master.inc.php';

	$url = 'https://maps.googleapis.com/maps/api/distancematrix/json?origins=' . $travel_from . '&destinations=' . $travel_to . '&key=' . GOOGLE_MAPS_API_KEY;
	$json_str = curl($url);
	$json = json_decode($json_str);

	$time = $json->rows[0]->elements[0]->duration->text;

	echo json_encode(array('time' => $time));