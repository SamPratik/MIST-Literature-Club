<?php

/*
include this file in your script
usage: send_mail($from, $to, $subject, $message);
*/

function send_mail($p1, $p2, $p3, $p4){
$from       = @trim(stripslashes($p1)); 
$to         = @trim(stripslashes($p2));
$subject    = @trim(stripslashes($p3)); 
$message    = @trim(stripslashes($p4));

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,'http://apps.mist.ac.bd/mail.php');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'from='.$from.'&to='.$to.'&subject='.$subject.'&message='.$message);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20); 
curl_setopt($ch, CURLOPT_TIMEOUT, 20);
curl_exec($ch);
}

?>