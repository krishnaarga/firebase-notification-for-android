<?php

// FCM token / device id
$to = 'caXj-Y9HSJunLQ_iJKpwVW:APA91bHPdYl14bgP1za-uhdmcPRkEEi0sI65BMkPpvysa615Bs7n-OJ68LDlVieigd-wyOi3bWehkTX3n4DrPvPTU6ip4MBFQR6F6fs6qIe9StSC9OM6fUKQ01-5LinAG46xH071QZzl';
// Notification
$data = array(
    'title'=>'Greeting',
    'body'=>'Hi from php script'
);
    
// Firebase Token
$api_key = 'AAAAYmYiF3U:APA91bF9r4cRIwRZ8LxcHEuvha5bxiLKN1aXhrSnBveDfbxcSIMaN4gc9btgAag7Lfo-_IP8T7SGqhct8yQr3SuyZpzA5kdVfst3EDEtmw117XQRN2-Ncm1JhJTL5_s';

$url = 'https://fcm.googleapis.com/fcm/send';
$fields = json_encode(array('to'=>$to, 'notification'=>$data));

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($fields));

$headers = array();
$headers[] = 'Authorization: key ='.$api_key;
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
