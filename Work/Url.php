<?php


$ch = curl_init();

$url = "https://www.breakingbadapi.com/api/characters";

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


$resp = curl_exec($ch);

if ($e = curl_error($ch)) {
    echo $e;
} else {
    $decoded = json_decode($resp, true); // This is [ if  true = Array els empti is object  ]
    $name = 'name';
    $img = 'img';
    $num = '0';
    print_r($decoded[$num][$name]);
    $m = $decoded[$num][$img];
?>
<img src="<? echo $m; ?>" alt="">
<?
}

curl_close($ch);

?>