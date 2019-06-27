<?
$ch = curl_init();

    $body=$_POST['smsMessage']; echo $body;
    $phone = "+14377882020";

	curl_setopt($ch, CURLOPT_URL, 'https://api.twilio.com/2010-04-01/Accounts/AC8354a4e50cf637933b4ca341f04d609e/Messages.json');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "To=$phone&From=+14377882020&Body=$body");
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

    header("Location: contact.php");

?>