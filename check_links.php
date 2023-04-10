<?php

function get_internal_links($url) {
    $html = file_get_contents($url);
    $dom = new DOMDocument;
    @$dom->loadHTML($html);
    $links = $dom->getElementsByTagName('a');
    $internal_links = [];
    foreach ($links as $link) {
        $href = $link->getAttribute('href');
        $internal_links[] = $href;
    }
    return $internal_links;
}

function get_http_code($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return $http_code;
}

$main_url = 'https://laznicka555.space/';
$internalLinks = get_internal_links($main_url);

foreach ($internalLinks as $link) {
    $http_code = get_http_code($link);
    if ($http_code >= 400) {
        echo "Stránka \"{$link}\" se nepodařilo načíst (HTTP CODE: {$http_code}).<br>";
    } else {
        echo "Stránka \"{$link}\" byla úspěšně načtena (HTTP CODE: {$http_code}).<br>";
    }
}

?>
