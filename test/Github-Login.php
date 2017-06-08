<?php

$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:53.0) Gecko/20100101 Firefox/53.0");
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_COOKIEFILE, "cookiefile");
curl_setopt($curl, CURLOPT_COOKIEJAR, "cookiefile"); # SAME cookiefile

//array con form input, da modificare in base al sito
$input = [
    "login" => "USERNAME",
    "register" => 0,
    "password" => "PASSWORD",
    "remember" => 0,
    "cookie_check" => 1,
    "redirect" => "/",
    "_xfToken" => "",
];

//genera una query string
$data = http_build_query($input);

//url dell'action page del sito
$url = "https://SITO/login";
        
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$x = curl_exec($curl);

//test per eventuali errori segnalati da curl
echo "ERRORE n.".curl_errno($curl).": ".curl_error($curl).".";

//chiudi sessione
curl_close ($curl);

//stampa il risultato
echo $x;

?>