<?php
//YOU MPESA API KEYS
$consumerKey = "LGQeg0etB2dS8jlo1tKBpwiENoStkhvBWCjg50BkmdHkQAMp"; //Fill with your app Consumer Key
$consumerSecret = "AmCsPGzFKGLFVzAIjDbGDQ5yAT5CZXRH05MgeDcjVn5j0d6gusgAAAaLgGXqmzBP"; //Fill with your app Consumer Secret
//ACCESS TOKEN URL
$access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$headers = ['Content-Type:application/json; charset=utf8'];
$curl = curl_init($access_token_url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_HEADER, FALSE);
curl_setopt($curl, CURLOPT_USERPWD, $consumerKey . ':' . $consumerSecret);
$result = curl_exec($curl);
$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
echo $result;
curl_close($curl);
?>


