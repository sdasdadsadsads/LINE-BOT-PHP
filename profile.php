<?php


$access_token = 'U5CR21pYHSpnnRkF4F07q7tRBH+U80wO89bgGf2vfvgoRT6QLJIoiuwFe6uYENy5NqcUjZYVupEoYGB44w/2PcOeQpfhGIJ1Pc91nkTKHeff/u4xGiOu4czJ2wSu0xdbJ3KBigTinS4BHSqlqTFNuQdB04t89/1O/w1cDnyilFU=
';

$userId = 'U844dd7170562abbb4019230e1846a729';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

