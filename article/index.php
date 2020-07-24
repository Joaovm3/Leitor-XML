<?php
ini_set('default_charset', 'UTF-8');

$xml = simplexml_load_file('artigos2.xml');

//$contador = count($xml->records->record);

$i = 0;
foreach ($xml->records->record as $registro) {
    $i++;
    echo "** *Artigo_" . $i . '<br>';
   // echo $registro->abstract . '<br>';
    echo $registro->abstract. '<br>' ;
}
