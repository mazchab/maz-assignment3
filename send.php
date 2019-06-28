<?

$ch = curl_init();

    $body=$_REQUEST['formGroupExampleInput3'];
    $phone = '+14377882020';
    $account_number = 'AC8354a4e50cf637933b4ca341f04d609e';
    $token = 'f5dc816e40e1bce472d910639a64ed8b';

	curl_setopt($ch, CURLOPT_URL, 'https://api.twilio.com/2010-04-01/Accounts/' . $ID . '/Messages.json');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "To=$phone&From=+15873166176&Body=$body");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_USERPWD, 'AC8354a4e50cf637933b4ca341f04d609e' . ':' . 'f5dc816e40e1bce472d910639a64ed8b');

	$headers = array();
	$headers[] = 'Content-Type: application/x-www-form-urlencoded';
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	$result = curl_exec($ch);
	if (curl_errno($ch)) {
	    echo 'Error:' . curl_error($ch);
	}
	curl_close ($ch);

    header("Location: index.php#page3");

/*
function send_sms($number,$body)
{
    $ID = 'AC8354a4e50cf637933b4ca341f04d609e';
    $token = 'f5dc816e40e1bce472d910639a64ed8b';
    $url = 'https://api.twilio.com/2010-04-01/Accounts/' . $ID . '/Messages.json';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

    curl_setopt($ch, CURLOPT_HTTPAUTH,CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD,$ID . ':' . $token);

    curl_setopt($ch, CURLOPT_POST,true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,
        'To=' . rawurlencode('+' . $number) .
        '&MessagingServiceSid=' . $service .
        //'&From=' . rawurlencode('+18885550000') .
        '&Body=' . rawurlencode($body));

    $resp = curl_exec($ch);
    curl_close($ch);
    return json_decode($resp,true);
    header("Location: index.php#page3");
}
*/
?>