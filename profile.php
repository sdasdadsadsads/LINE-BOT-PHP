<?php


$access_token = 'C31lTMdbSdTf1Q5i790AIVrr4PyNYNUIfDvjMvpu2Ggs7LGBeJUiCURyVFnhKJzMNqcUjZYVupEoYGB44w/2PcOeQpfhGIJ1Pc91nkTKHedInqSM9cM1hJJ+Hqnt2x/NxisYheWE7loXt7MnKTs6zgdB04t89/1O/w1cDnyilFU=';

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

