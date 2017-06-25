<?php

require_once 'html.php';

//USE string stristr ( string $haystack , mixed $needle [, bool $before_needle = false ] )
//or XML Parser
//or DOM

//crea l'handler/ parser
$parser = xml_parser_create();

//controllo errori
if (xml_get_error_code($parser) !== 0){
    $code = xml_get_error_code($parser);
    echo xml_error_string($code);
}

//libera il parser
xml_parser_free($parser);