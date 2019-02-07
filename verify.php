<?php
$access_token = '9rY9WsqKhfUx/WnXFNMtMFMb6ALLLj/CY9ei44jMxF6obCe6cwaKTHbaEtnF02dK7PSbaxd6SBlKr6gyghJEj55Ujj4gDpQzfxW6KjIKqHKTUSUUOifDLeVTqvJTDiotwuG1diAzN7+IK6bolmmyoQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
