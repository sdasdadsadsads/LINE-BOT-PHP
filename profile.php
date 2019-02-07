<?php


$access_token = 'vxbYKNREz8AilAWOE5zDAuQQUkOArmcYAP3scPjD2OzZyfKX/JGsLyjU6HOS0GW97PSbaxd6SBlKr6gyghJEj55Ujj4gDpQzfxW6KjIKqHJsQfEU/aSeobNkmZHpsiZgpk8uAh/k3rG7I/1aFiK91AdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

