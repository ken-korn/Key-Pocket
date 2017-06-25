<?php

require_once 'tool_show-array.php';


$doc = new DOMDocument; //Istanzia la classe DOM

/*HTML FROM SOURCES*/
require_once 'ex_html-(Altervista login).php';
//require_once 'ex_html-simple.php';
//$html = file_get_contents('https://www.iprogrammatori.it/forum-programmazione/ucp.php?mode=login');

@$doc->loadHTML($html); //Carica l'html in formato stringa*/



/*HTML FROM PAGES*/
/*$page = 'ex_html-(Inforge).html';

@$doc->loadHTMLFile($page); //Carica l'html da file.html*/



//mostraAttributiTag('input', $doc);


/*Seleziona da quale form nella pagina selezionare i tag input*/
if ($doc->getElementsByTagName('form')->length > 1){
    echo 'Decidi quale form usare';
} else {
    $nodeList = $doc->getElementsByTagName('input');
}

//mostraAttributiTag('input', $doc);

/*variabili per la gestione dell'array multidimensionale*/
$i = 0;
$k = 0;
$array = array();

foreach($nodeList as $item){
    
    $namedNodeMap = $item->attributes;
    
    foreach($namedNodeMap as $attribute){
        
        if ($attribute->nodeName !== 'id' && $attribute->nodeName !== 'class'){
            $tag_attribute = $attribute->nodeName.'="'.$attribute->nodeValue.'" ';
            echo $tag_attribute;
            $array[$i][$k] = $tag_attribute;
        }
        $k++;
    }
    echo "\n";
    $i++;
}

print_r($array); //array contenente i vari campi input con realtivi attributi

