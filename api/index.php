<?php

$url = 'https://babel-in.xyz/tata/key';
$data = [
    'X-API-Key' => 'babel-xxxxxx',
    'X-Channel-ID' => '{channelID}',
];
$jsonData = json_encode($data);

$options = [
    'http' => [
        'header'  => [
            "Content-type: application/json",
            "User-Agent: Babel/5.0"
        ],
        'method'  => 'POST',
        'content' => $jsonData,
    ],
];

$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);

if ($response === FALSE) {
    die('Error sending request');
}

echo $response;
