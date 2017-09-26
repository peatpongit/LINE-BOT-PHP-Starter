<?php
$access_token = 'JoxKyQKT9VE2c2+p9lkQnDXx0PXU9Kyxi+McK6ICcMJBjYWpGbMHCH8D6KgPm1uZsSxwLbk3Ulp4gMLNzfQd99BYNg6pc7Q36ebH9l3e3uPN/LLYaYmV+Rl+slTJEYOEv2tCImC42A7H7RHGWzmIjgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
