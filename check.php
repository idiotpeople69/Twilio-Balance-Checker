<?php
system('clear');
echo "Twilio Balance Checker - IdiotPeople69\n => Enter Your SID : ";
$sid = trim(fgets(STDIN));
echo " => Enter Your Token : ";
$token = trim(fgets(STDIN));
$URL = "https://api.twilio.com/2010-04-01/Accounts/$sid/Balance.json";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$URL);
curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_USERPWD, "$sid:$token");
$result = curl_exec ($ch);

echo "Result : \n".$result."\n";
?>
