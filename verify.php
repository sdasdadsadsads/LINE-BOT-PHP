<?php
$access_token = 'jvMwp4K7b3c+pYZfyPyL142BBEigMjXh7wJvgn8qu0MJSWHfJrKKz9/+nFMKaBFf7PSbaxd6SBlKr6gyghJEj55Ujj4gDpQzfxW6KjIKqHKrj0g5Mu/gGOoMCcYWA11QXY2BwjyttlekM4FNxlbv4QdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v2/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
