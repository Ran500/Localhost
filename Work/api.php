<?php

// https://www.breakingbadapi.com/api/

$ch = curl_init();

$data = array(
    'client_id' => 'xx',
    'client_secret' => 'xx',
    'redirect_uri' => $x,
    'grant_type' => 'xxx',
    'code' => $xx,
);

$data = http_build_query($data);

curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_URL, "https://example.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);

$output = curl_exec($ch);