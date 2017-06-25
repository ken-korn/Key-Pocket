<?php

/*HTML PARSERS: 
 * 1)DOM
 * 2) XML Parser
 * 3) function stristr, with REGEX
 * 
 */

$a = array(
    NULL => 'zero',
    1    => 'one',
    2    => 'two');

function mostra_array($array){
    
    foreach ($array as $key => $value){
        
            echo '[';
            print_r($key);
            echo '] => ';
            print_r($value);
            echo "<br>";
            //echo "\r\n";
        
        }
    
}


function mostraAttributiTag($tag, DOMDocument $doc){
    //$doc deve essere istanza di DOMDocument
    $nodeList = $doc->getElementsByTagName($tag);
    foreach($nodeList as $item){
    $namedNodeMap = $item->attributes;
    foreach($namedNodeMap as $attribute){
        $tag_attributes = $attribute->nodeName.'="'.$attribute->nodeValue.'" ';
        echo $tag_attributes;
        }
    echo "\n";
    }
    
}