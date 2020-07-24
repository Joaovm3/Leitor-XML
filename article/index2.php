<?php
ini_set('default_charset', 'UTF-8');

$xml = simplexml_load_file('teste.xml');

//$contador = count($xml->records->record);
$i = 0;
foreach ($xml->Worksheet->Table->Row as $registro) {
    $i++;
    echo "** *Artigo_" . $i . '<br>';
   // echo $registro->abstract . '<br>';
    echo $registro->Cell->Data['StyleID']. '<br>' ;
}
